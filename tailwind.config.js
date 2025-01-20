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
                customPurple: "#2c0032",
            },
            fontFamily: {
                aeonik: ["AeonikTRIAL", "sans-serif"],
                plush: ["Plush", "cursive"],
                rubik: ["Rubik", "sans-serif"],
                ebfont: ['Aeonik', 'Rubik', 'serif'],
            },
            animation: {
                scroll: "scroll 20s linear infinite", // Smooth scroll animation
                'rotate-border': 'rotate-border 2.5s linear infinite', // Glowing border rotation
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(180deg, #4c0970 0%, #6A0DAD 60%, #4c0970 100%)',
            },
            keyframes: {
                scroll: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                'rotate-border': {
                    '0%': { '--gradient-angle': '0deg' },
                    '100%': { '--gradient-angle': '360deg' },
                },
            },
        },
    },
    plugins: [],
};
