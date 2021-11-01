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
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            newgray: {
                50: '#f9fafb',
                100: '#f4f5f7',
                200: '#e5e7eb',
                300: '#d5d6d7',
                400: '#9e9e9e',
                500: '#707275',
                600: '#4c4f52',
                700: '#24262d',
                800: '#1a1c23',
                900: '#121317',
                // default values from Tailwind UI palette
                // '300': '#d2d6dc',
                // '400': '#9fa6b2',
                // '500': '#6b7280',
                // '600': '#4b5563',
                // '700': '#374151',
                // '800': '#252f3f',
                // '900': '#161e2e',
              },
        },
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
  plugins: [
    require('tailwind-scrollbar-hide'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
