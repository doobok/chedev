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
        // primary: colors.green,
        // secondary: colors.yellow,
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
