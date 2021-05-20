const mix = require('laravel-mix');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').vue()
  .copy([
    'resources/js/**/*.jpg',
    'resources/js/**/*.png',
  ], 'public/images')
  .sass('resources/sass/common.scss', 'public/css')
  .sass('resources/sass/view-auth.scss', 'public/css')
  .sass('resources/sass/view-users.scss', 'public/css')
  .sourceMaps();

mix.webpackConfig({
  output: {
    path: path.resolve(__dirname, 'public/'),
    publicPath: '/',
    chunkFilename: './js/[name].chunk.js'
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js')
    }
  }
});
