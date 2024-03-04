/** @type {import('tailwindcss').Config} */
export default {
  mode: 'jit',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    fontFamily: {
      sans: ['"Inter", sans-serif']
    }
  },
  plugins: [],
}