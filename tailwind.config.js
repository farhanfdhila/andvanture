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
        'memphis-yellow': '#FFD166',
        'memphis-pink': '#EF476F',
        'memphis-blue': '#118AB2',
        'memphis-mint': '#06D6A0',
      },
      boxShadow: {
        'memphis': '6px 6px 0px 0px rgba(0,0,0,1)',
        'memphis-hover': '10px 10px 0px 0px rgba(0,0,0,1)',
      }
    },
  },
  plugins: [],
}