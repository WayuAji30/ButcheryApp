/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            screens: {
                sm: { min: "375px", max: "767px" },
                // => @media (min-width: 640px and max-width: 767px) { ... }

                md: { min: "768px", max: "1023px" },
                // => @media (min-width: 768px and max-width: 1023px) { ... }

                lg: { min: "1024px" },
                // => @media (min-width: 1024px) { ... }
            },
        },
    },
    plugins: [],
};
