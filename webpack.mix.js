const path = require('path')
const mix = require('laravel-mix')
const cssImport = require('postcss-import')
const cssNesting = require('tailwindcss/nesting')

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

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css/app.css', [
    // prettier-ignore
    cssImport(),
    cssNesting(),
    require('tailwindcss'),
  ])
  .webpackConfig({
    stats: {
      children: true,
    },
  })
  //mix.copyDirectory('resources/fonts', 'public/fonts');
/* .webpackConfig({
    resolve: {
      extensions: ['.js', '.svelte'],
      mainFields: ['svelte', 'browser', 'module', 'main'],
      alias: {
        '@': path.resolve('resources/js'),
      },
    },
    module: {
      rules: [
        {
          test: /\.(m?js)$/,
          resolve: {
            fullySpecified: false,
          },
        },
        {
          test: /\.(svelte)$/,
          use: {
            loader: 'svelte-loader',
            options: {
              emitCss: true,
              hotReload: true,
            },
          },
        },
      ],
    },
  }) */
//.browserSync('http://joytail.test')
mix
  .browserSync({
    files: [
      'public/js/**/*',
      'public/css/**/*',
      'public/**/*.+(html|php|svg)',
      //'resources/views/**/*.php',
    ],
    proxy: {
      target: 'http://sport-wedl.test',
      //ws: true,
    },
  })
  .sourceMaps()
