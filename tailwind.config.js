import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans], 
                "hanken-grotesk": ["Hanken Grotesk", "san-serif"], 
                "backlash-rpjol": ["Backlash RpJol", "san-serif"], 
                "poppins": ["Poppins", "san-serif"], 
                "algerian": ["Algerian", "san-serif"], 
                "castellar": ["Castellar", "san-serif"], 
                "rockwell": ["Rockwell", "san-serif"], 
            }, 

            fontSize: {
                "2xs": "0.625rem", //10px
                "1xs": "0.75rem", //14px 
                "md": "16px", 
            }, 

            fontWeight: {
                "bolder": "bolder", 
            },

            borderRadius: {
                "50%": "50px", 
            }, 

            height: {
                "40pic": "40px", 
            }, 

            colors: {
                "semiblack": "#060606", 
                "gray": "gray", 
                "blue": "blue",
                "lightblue": "#0d6efd",
                "red": "red",
                "orange": "orange", 
                "darkorange": "#EB6200",
                "pink": "pink",
                "green": "green",
                "gold": "gold",
                "yellow": "yellow",
                "brown": "brown", 
                "aliceblue": "aliceblue", 
            }, 
        },
    },
    plugins: [],
};
