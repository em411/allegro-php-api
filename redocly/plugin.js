const SanitizePathParams = () => {
  const camel = (s) => s.replace(/-([a-z])/g, (_, c) => c.toUpperCase());
  const fixTpl = (p) =>
    p.replace(/\{([^}]*-[^}]*)\}/g, (_, n) => `{${camel(n)}}`);

  return {
    Root: {
      leave(root) {
        if (!root.paths) return;
        for (const key of Object.keys(root.paths)) {
          const fixed = fixTpl(key);
          if (fixed !== key) {
            root.paths[fixed] = root.paths[key];
            delete root.paths[key];
          }
        }
      },
    },
    Parameter: {
      leave(param) {
        if (param.in === "path" && param.name?.includes("-")) {
          param.name = camel(param.name);
        }
      },
    },
  };
};

module.exports = {
  id: "sanitize",
  decorators: {
    oas2: { "path-params": SanitizePathParams },
    oas3: { "path-params": SanitizePathParams },
  },
};
