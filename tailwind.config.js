const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/js/**/*.vue',
    ],
    // darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: '#4168BB',
                'primary-50': '#455575',
                'primary-100': '#567BCA',
                'dark-50': '#020633',
                'dark-100': '#000b4d',
                secondary: '#FFC046',
                'secondary-50': '#9F8757',
                'secondary-100': '#FFC75B',
                'blue': colors.indigo,
                'yellow': colors.amber,
                'green': colors.emerald,
            },
            backgroundImage: {
                'curve-bl': "url('/bg/curve-bl.svg')",
                'index': "url('/bg/index-bg.svg')",
                'shape': "url('/bg/shape.svg')",
            },
            backgroundSize: {
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                '30': '30%',
                '50': '50%',
                '70': '70%',
                '100': '100%',
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
    plugins: [
        require('@tailwindcss/aspect-ratio'),
    ],
}
