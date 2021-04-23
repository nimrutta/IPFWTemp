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
        },
        inset: {
          '-0.2': '-0.12rem'
        },
        borderRadius: {
          '4xl': '2rem'
        },
      },
    },
    variants: {
      extend: {},
    },
    plugins: [],
}