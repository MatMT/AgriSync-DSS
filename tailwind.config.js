// tailwind.config.js

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    fontFamily: {
      sans: ['"Inter", sans-serif']
    },
    extend: {
      colors: {
        azul: '#007df4',
        secundario: '#00c8c2',
        negro: '#1a1b15',
        blanco: '#ffffff',
        gris: '#64748b',
        'gris-claro': '#f8fafc',
        'gris-oscuro': '#1e293be0',
        rojo: '#a90000',
        verde: '#02db02',
      },
    },
  },
  plugins: [],
}
