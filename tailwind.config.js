import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            colors: {
                primary: "#FAB900",
                secondary: "#362B0E",
            },
            fontFamily: {
                poppins: "Poppins, sans-serif",
            },
        },
    },
    plugins: [],
};
