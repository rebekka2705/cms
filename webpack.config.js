const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyWebpackPlugin = require('copy-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const glob = require('glob');
const path = require('path');

const themeName = 'alex';
const pluginFolder = `public/wp-content/plugins`;
const themeFolder  = `public/wp-content/themes/${themeName}`;
const phpServerUrl = "wpalex.localhost";

module.exports = {
  entry: { main:'./src/index.js', admin: './src/sass/admin.scss' },
  output: {
    path: path.resolve(__dirname, themeFolder),
  },

  devServer: {
    contentBase: './dist'
  },

  devtool: "none",
  module: {
    rules: [

      // use babel for all js files
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ['@babel/preset-env'],
            plugins: ['@babel/plugin-transform-shorthand-properties']
          }
        }
      },

      // convert SASS to CSS, then minify and autoprefix
      {
        test: /\.(scss|css)$/,
        use: [
          MiniCssExtractPlugin.loader, // extract CSS into separate file
          { loader: "css-loader", // translates CSS into CommonJS
            options: {
              sourceMap: true
            }
          },
          { loader: "postcss-loader", // autoprefixes CSS
            options: {
              sourceMap: true
            }
          },
          { loader: "sass-loader", // compiles Sass to CSS, using Node Sass by default
            options: {
              sourceMap: true,
            }
          },
          { loader: "import-glob-loader" }
        ]
      },

      // include fonts
      {
        test: /\.(woff|woff2|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'fonts/'
          }
        }]
      },

      // include partials (must be located in `src/partials/`)
      {
        test: /\_.*\.html$/,
        include: [path.resolve(__dirname, 'src/partials')],
        use: [{
          loader: 'html-loader',
          options: { 
            root: path.resolve(__dirname, 'src')
          }
        }]
      },

      // compress and include images
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: [
          { loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'images/'
            }
          },

          {
            loader: 'image-webpack-loader',
          }
        ]
      }
    ]
  },

  plugins: [

    // Sync webpage via proxy-server
    new BrowserSyncPlugin(
      {
        proxy: phpServerUrl ,
        open: false
      },
      {
        // reload: false
      }
    ),
    // clean dist folder before each build
    new CleanWebpackPlugin(),

    // extract css into file
    new MiniCssExtractPlugin({
      filename: '[name].[contenthash].css'
    }),

    new CopyWebpackPlugin([
      { from: 'src/favicons/*',
        to: path.resolve(__dirname, 'public/'),
        flatten: true
      },
      { from: 'src/style.css',
        to: path.resolve(__dirname, themeFolder),
        flatten: true
      },
      { from: 'src/screenshot.png',
        to: path.resolve(__dirname, themeFolder),
        flatten: true
      },
      { from: 'src/wordpress/wp-config.php',
        to: path.resolve(__dirname, 'public/'),
        flatten: true
      },
      { from: 'src/templates/*',
        to: `${path.resolve(__dirname, themeFolder)}/templates`,
        flatten: true,
        copyUnmodified: true
      },
      { context: './src/php',
        from: '**',
        to: '',
        typeTo: 'dir',
        copyUnmodified: true
      },
    ]),

    new HtmlWebpackPlugin({
      template: 'src/php/functions.php',
      filename: 'functions.php',
      hash: true,
      inject: false,
    })
  ],

  optimization: {
    minimizer: [new TerserPlugin()]
  }
}