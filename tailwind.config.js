const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Play', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'model-3': "url('/img/bg/bg_index.jpg')",
                'mobile-model-3': "url('/img/bg/bg_mobile_v2.jpg')",
            }),
        },
        screens: {
            'tablet': '600px',
            'desktop': '1200px',
            'portrait': {'raw': '(orientation: portrait)'},
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        extend: {},
    },

    plugins: [require('@tailwindcss/ui')],
};
