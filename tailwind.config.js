import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                customPurple: "#2c0032", // Add the custom purple color
            },
            fontFamily: {
                aeonik: ["AeonikTRIAL", "sans-serif"],
                plush: ["Plush", "cursive"],
                rubik: ["Rubik", "sans-serif"],
                ebfont: ['Aeonik', 'Rubik', 'serif'],
            },
            animation: {
                scroll: "scroll 20s linear infinite", // Smooth scroll animation
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(180deg, #320b37 0%, #5b0c65 60%, #130415 100%)',
              },
            animation: {
                scroll: "scroll 20s linear infinite", 
            },
            keyframes: {
                scroll: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
            },
        },
    },
    plugins: [],
};
