/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'yellow': '#CDA34F',
        'cream': '#FAF1E4',
        'green': {
          darkest: '#373F27',
          dark: '#415230',
          medium: '#636B46',
          light: '#9EB485',
          pastel: '#CEDEBD',
        },
      },
      fontFamily: {
        Raleway: ['Raleway', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
