/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
        montserrat: [ "Montserrat", "sans-serif"],
        roboto:['Roboto', "sans-serif"],
      },
      colors:{
        transparent: 'transparent',
        current: 'currentColor',
        primary: "#090E34",
        primaryOdd:"#0C1139",
        secondary:"#476DF6",
        nonActive: "#8793B1",
        active:"#D9D9D9",
        card: "#1D2144",
        btn:"#101849",
        wrapper:"#232B50",
        btnHome:"#476DF6",
        
      }
    },
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  plugins: [],
}

