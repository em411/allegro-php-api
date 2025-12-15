<?php

return [
    'openapi-file' => __DIR__ . '/resources/spec.yaml',
    'namespace' => 'Em411\\Allegro\\Api',
    'directory' => __DIR__ . '/generated',
    'strict' => false,
    'clean-generated' => true,
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/.php-cs-fixer.php',
];