const defaultTheme = require('tailwindcss/defaultTheme');


/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                abril: ['Abril Fatface']
            },
            colors: {
                custom: {
                  100: '#38647f',
                  100: '#AE8D98',
                  500: '#9eb0bc',
                  400: '#8EB1B2',
                  300: '#CBC6C1',
                  600: '#13203E',
                  700: '#CBBDBB',
                  800: '#054961',
                  900: '#091c2d',
                  
                  
                },
              },
        },
    },
    variants: {},
    plugins: [require('@tailwindcss/forms')],
};
