/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'night': '#0a0a0b',
      'celtic-blue': '#0270d4',
      'seasalt': '#fafafa',
      'red': '#ff0a37',
      'french-gray': '#aeb2b7',
      'eerie-black': '#1e1e1e',
    },
    extend: {},
    fontFamily: {
      exo: ['Exo', 'sans-serif'],
    },
  },
  plugins: [],
}