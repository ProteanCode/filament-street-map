module.exports = {
    plugins: {
        "postcss-import": {
            filter: (path) => !path.includes('/vendor/filament'),
        },
        "tailwindcss/nesting": {},
        tailwindcss: {},
        autoprefixer: {},
    },
}
