// purgecss.config.js
module.exports = {
    content: ['**/*.php'],
    css: ['css/style.css'],
    defaultExtractor: (content) => content.match(/[\w\-:.\/\[#%\]]+(?<!:)/g) || [],
    output: 'css/style.css',
    safelist: [/^color-/, /^bg-/, /^seger-block-/]
};