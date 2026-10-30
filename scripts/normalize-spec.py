#!/usr/bin/env python3
"""Validate the downloaded OpenAPI spec and re-serialize it as JSON.

The upstream Allegro spec occasionally contains YAML that PyYAML accepts but
js-yaml (used by Redocly) rejects, e.g. "deficient indentation" errors.
Parsing it here and handing Redocly plain JSON sidesteps those quirks.

PyYAML implements YAML 1.1, which would turn values such as ON/NO/Y into
booleans and 2024-01-01 into dates. The loader below only resolves the
YAML 1.2 core types (matching js-yaml's JSON_SCHEMA used by Redocly), so
enum values and examples survive unchanged.

Usage: normalize-spec.py <input.yaml> <output.json>
"""

import json
import re
import sys

import yaml


class CoreLoader(yaml.SafeLoader):
    pass


CoreLoader.yaml_implicit_resolvers = {}
CoreLoader.add_implicit_resolver(
    "tag:yaml.org,2002:null",
    re.compile(r"^(?:~|null|Null|NULL|)$"),
    ["~", "n", "N", ""],
)
CoreLoader.add_implicit_resolver(
    "tag:yaml.org,2002:bool",
    re.compile(r"^(?:true|True|TRUE|false|False|FALSE)$"),
    list("tTfF"),
)
CoreLoader.add_implicit_resolver(
    "tag:yaml.org,2002:int",
    re.compile(r"^(?:[-+]?[0-9]+|0o[0-7]+|0x[0-9a-fA-F]+)$"),
    list("-+0123456789"),
)
CoreLoader.add_implicit_resolver(
    "tag:yaml.org,2002:float",
    re.compile(
        r"^(?:[-+]?(?:\.[0-9]+|[0-9]+(?:\.[0-9]*)?)(?:[eE][-+]?[0-9]+)?"
        r"|[-+]?\.(?:inf|Inf|INF)|\.(?:nan|NaN|NAN))$"
    ),
    list("-+.0123456789"),
)


def construct_core_int(loader, node):
    value = loader.construct_scalar(node)
    if value.startswith("0o"):
        return int(value[2:], 8)
    if value.startswith("0x"):
        return int(value[2:], 16)
    return int(value)


CoreLoader.add_constructor("tag:yaml.org,2002:int", construct_core_int)


def fail(message):
    print(f"::error::{message}", file=sys.stderr)
    sys.exit(1)


def main():
    if len(sys.argv) != 3:
        fail("usage: normalize-spec.py <input.yaml> <output.json>")

    src, dst = sys.argv[1], sys.argv[2]

    with open(src, encoding="utf-8") as f:
        doc = yaml.load(f, Loader=CoreLoader)

    if not isinstance(doc, dict):
        fail("Spec is not a YAML mapping")
    if "openapi" not in doc and "swagger" not in doc:
        fail("Missing openapi/swagger version key")
    if "paths" not in doc:
        fail("Missing paths key")

    with open(dst, "w", encoding="utf-8") as f:
        json.dump(doc, f, ensure_ascii=False, indent=2)

    print(f"✅ Valid spec — {len(doc['paths'])} paths found")


if __name__ == "__main__":
    main()
