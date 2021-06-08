const mix = require("laravel-mix");

mix.postCss("resources/css/app.css", "public/css", [
    require("@tailwindcss/jit"),
]);
// .js("resources/js/Slider.js", "public/js");
// mix.js('resources/js/app.js', 'public/js')
//     .postCss("resources/css/app.css", "public/css").options({
//       postCss: [
//         require("@tailwindcss/jit"),
//       ],
//     });
