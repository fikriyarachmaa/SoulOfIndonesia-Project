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
          dark: '#a5f3fc',
          medium: '#67e8f9',
          light: '#22d3ee',
          pastel: '#06b6d4',
        },
      },
      fontFamily: {
        Raleway: ['Raleway', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
