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
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                iceberg: ["Iceberg", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"], // Poppins font for consistency
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
