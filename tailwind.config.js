// tailwind.config.js
module.exports = {
    // purge: [
    //   './resources/**/*.blade.php',
    //   './resources/**/*.js',
    //   './resources/**/*.vue',
    // ],
    purge: ['./resources/**/*.{js,vue,blade.php}'],
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {
        spacing: {
          '128': '32rem',
          '144': '36rem',
          '160': '40rem',
        },
        inset: {
          '-0.2': '-0.12rem'
        },
        borderRadius: {
          '4xl': '2rem'
        },
        fontSize: {
          '80px': '5rem',
        },
        textColor: {
          'ipfDarkBlue': '#114582',
        },
      },
    },
    variants: {
      extend: {},
    },
    plugins: [],
}