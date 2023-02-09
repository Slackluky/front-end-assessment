module.exports = {
    env: {
        browser: true,
        es2021: true,
        node: true,
        "vue/setup-compiler-macros": true
    },
    extends: ["eslint:recommended", "plugin:vue/vue3-recommended", "prettier"],
    parserOptions: {
        ecmaVersion: "latest",
        sourceType: "module"
    },
    plugins: ["vue", "prettier"],
    rules: {
        "prettier/prettier": [
            "error",
            {
                endOfLine: "auto",
                semi: true,
                tabWidth: 4,
                printWidth: 100,
                singleQuote: false,
                trailingComma: "none",
                jsxBracketSameLine: true
            }
        ]
    }
};
