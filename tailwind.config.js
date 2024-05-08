/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {},
    fontFamily: {
      body: ['Roboto']
    },

    backgroundImage : {
      'jumbotron' : "url('/public/img/bg.png')"
    }
  },
  plugins: [],
}

