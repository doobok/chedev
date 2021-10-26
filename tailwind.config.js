const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/js/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: '#4168BB',
                'primary-50': '#455575',
                'primary-100': '#567BCA',
                secondary: '#FFC046',
                'secondary-50': '#9F8757',
                'secondary-100': '#FFC75B',
                teal: colors.teal,
            },
            // animation: {
            //     'fade-in': 'fadeIn 3s linear infinite',
            // },
            // keyframes: {
            //     fadeIn: {
            //         '0%': { opacity: 0 },
            //         '100%': { opacity: 1 },
            //     }
            // }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
