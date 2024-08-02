/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'night': '#0A0A0B',
      'blue': '#0270d4',
      'white': '#fafafa',
      'red': '#ff0a37',
      'french-gray': '#AEB2B7',
    },
    extend: {},
    fontFamily: {
      exo: ['Exo', 'sans-serif'],
    },
  },
  plugins: [],
}