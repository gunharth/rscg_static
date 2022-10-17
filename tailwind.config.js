const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    // prettier-ignore
    './public/**/*.html',
    './public/**/*.php',
    './public/**/*.svg',
    //'./resources/**/*.js',
  ],
  theme: {
    fontFamily: {
      folio: ['Folio'],
    },
    fontSize: {
      xs: '.75rem',
      sm: '.875rem',
      tiny: '.875rem',
      base: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '3.75rem',
      '7xl': '4.5rem',
      '8xl': '5rem',
      '9xl': '7rem',
      20: [
        '20px',
        {
          lineHeight: '30px',
        },
      ],
      40: [
        '40px',
        {
          lineHeight: '50px',
        },
      ],
      46: [
        '46px',
        {
          letterSpacing: '-0.02em',
          lineHeight: '40px',
        },
      ],
      70: [
        '70px',
        {
          letterSpacing: '-0.02em',
          lineHeight: '60px',
        },
      ],
      100: [
        '100px',
        {
          letterSpacing: '-0.02em',
          lineHeight: '80px',
        },
      ],
      115: [
        '115px',
        {
          letterSpacing: '-0.02em',
          lineHeight: '90px',
        },
      ],
      170: [
        '170px',
        {
          letterSpacing: '-0.02em',
          lineHeight: '130px',
        },
      ],
      300: [
        '300px',
        {
          letterSpacing: '-0.02em',
          lineHeight: '240px',
        },
      ],
    },
/*     screens: {
      xs: '475px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px',
      '3xl': '1920px',
    }, */
    /* fontSize: {
      '2xl': ['24px', {
        letterSpacing: '-0.01em',
      }],
      // Or with a default line-height as well
      '3xl': ['32px', {
        letterSpacing: '-0.02em',
        lineHeight: '40px',
      }],
    fontSize: {
      xs: '.75rem',
      sm: '.875rem',
      tiny: '.875rem',
      base: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '3.75rem',
      '7xl': '4.5rem',
      '8xl': '5rem',
      '9xl': '7rem',
    }, */
    /*     screens: {
      '2xs': '175px',
      xs: '475px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px',
    }, */
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      red: colors.red,
      orange: colors.orange,
      yellow: colors.yellow,
      green: colors.green,
      gray: colors.slate,
      indigo: {
        100: '#e6e8ff',
        300: '#b2b7ff',
        400: '#7886d7',
        500: '#6574cd',
        600: '#5661b3',
        800: '#2f365f',
        900: '#191e38',
      },
      negative: '#d44c53',
      positive: '#26e6be',
      white: '#ffffff',
      'text-light': '#5A99AD',
      'text-default': '#414A68',
      'primary-accent': '#00cac3',
      cta: '#00E7BD',
      // 'test': '#0073a9',
      test: '#405c69',
      wedl: {
        red: '#D22B27',
        white: '#F3F3F3',
        gray: '#C5C5C5',
        line: '#DBDBDB',
      },
    },
    extend: {
      aspectRatio: {
        '3/4': '3 / 4',
        '4/3': '4 / 3',
        '4/5': '4 / 5',
        '4/4.5': '4 / 4.5',
        '4/4.6': '4 / 4.6',
        '5/4': '5 / 4',
        '8/4.6': '8 / 4.6',
      },
      animation: {
        fadeIn: 'fadeIn 1s ease-in forwards',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 },
        },
      },
      transitionProperty: {
        width: 'width',
        height: 'height',
      },
    },
    variants: {},
  },
  plugins: [],
}
