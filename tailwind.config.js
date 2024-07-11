/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'bebas_neue': ['Bebas Neue', 'cursive'],
        'poppins': ['Poppins', 'sans-serif']
      }
    },
  },
  plugins: [],
}

