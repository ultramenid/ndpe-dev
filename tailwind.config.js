const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [                               //CONFIGURE CORRECTLY
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/**/*.blade.php',
        './resources/**/**/**/*.blade.php',
        './resources/**/*.js',
        './config/*.php',
      ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'sans': ['Roboto', ...defaultTheme.fontFamily.sans],
            'notoserif' : ['Noto Serif']
          },
    },
  },
  variants: {
    extend: {
    },
  },
  plugins: [],
}
