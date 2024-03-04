/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/index.php",
    "./views/**/*.php",
    "./src/css/*.css"
  ],
  theme: {
    fontFamily: {
      sans: ['"Inter", sans-serif']
    }
  },
  plugins: [],
}

