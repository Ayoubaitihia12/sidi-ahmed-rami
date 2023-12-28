/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'primary-color':'#2F80ED',
        'second-color':'#E2EFEF',
        'accent-color':'#FFA600',
        'light-green-color' : '#D6F4DA',
        'hover-accent-color' : '#DE9506',
    }
    },
  },
  plugins: [],
}

