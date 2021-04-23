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
      extend: {},
    },
    variants: {
      extend: {},
    },
    plugins: [],
}