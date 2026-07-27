import js from "@eslint/js";
import globals from "globals";

export default [
    js.configs.recommended,
    {
        languageOptions: {
            ecmaVersion: 2020,
            sourceType: "script",
            globals: {
                ...globals.browser,
            },
        },
        rules: {
            "no-undef": "warn",
            "no-unused-vars": "warn",
            "no-eval": "error",
            "no-implied-eval": "error",
            "no-new-func": "error",
            "no-script-url": "error",
            "eqeqeq": ["warn", "smart"],
            "no-var": "warn",
            "prefer-const": "warn",
            "no-alert": "warn",
            "no-debugger": "error",
            "no-console": "warn",
            "curly": ["warn", "multi-line"],
            "no-shadow": "warn",
            "no-use-before-define": ["warn", { "functions": false }],
            "no-redeclare": "warn",
        },
    },
    {
        ignores: [
            "**/*.min.js",
            "**/vendor/**",
            "**/node_modules/**",
            "**/dist/**",
            "**/build/**",
        ],
    },
];
