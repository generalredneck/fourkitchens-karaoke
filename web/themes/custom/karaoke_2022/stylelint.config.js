module.exports = {
  extends: ['stylelint-config-standard', 'stylelint-config-prettier'],
  plugins: ['stylelint-prettier'],
  rules: {
    'at-rule-no-unknown': [
      true,
      {
        ignoreAtRules: [
          'at-root',
          'content',
          'each',
          'else',
          'extend',
          'for',
          'forward',
          'function',
          'if',
          'import',
          'include',
          'mixin',
          'return',
          'use',
          'while',
        ],
      },
    ],
    'number-leading-zero': 'always',
    'number-no-trailing-zeros': true,
    'prettier/prettier': true,
    'selector-class-pattern': null,
  },
};
