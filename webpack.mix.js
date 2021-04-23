const mix = require('laravel-mix');

mix.postCss("resources/css/app.css", "public/css", [
  require("@tailwindcss/jit"),
]);
// mix.js('resources/js/app.js', 'public/js')
//     .postCss("resources/css/app.css", "public/css").options({
//       postCss: [
//         require("@tailwindcss/jit"),
//       ],
//     });