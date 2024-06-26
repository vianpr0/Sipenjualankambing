/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.{js,.blade.php}",
  ],
  theme: {
    extend: {},
  },

  plugins: [
    require('flowbite/plugin'),
    require('daisyui'),
  ],
  daisyui: {
    themes: ["Default","Retro", "Cyberpunk", "cupcake", "dark", "Valentine"],
  },

}
