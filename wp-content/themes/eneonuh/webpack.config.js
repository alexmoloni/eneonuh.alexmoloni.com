/*
env: {env: 'prod'}
env: {env: 'dev'}
env: {}
*/

var path = require('path');
var ETP = require('extract-text-webpack-plugin');

module.exports = (env = {}) => {
  var ENV = env.env;
  if ( undefined === ENV || (ENV !== 'prod' && ENV !== 'dev') ) {
    ENV = 'dev';
  }

  let msg = `\n\n =========================
				 \n\n  deploying >${ENV}< stuff
				 \n\n =========================\n\n`;

  console.log(msg);

  var plugins = [];

  plugins.push(
    new ETP('[name]'),
  );

  return {
    entry: {
      //the key is used to specify the location where the output files will be saved - it depends on env
      [ `assets/js/${ENV}/main.js` ]: './assets/js/src/main.js',
      [ `assets/css/${ENV}/main.css` ]: './assets/css/src/main.scss'
    },
    output: {
      path: path.resolve(__dirname, './'),
      filename: '[name]'
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          loader: 'babel-loader',
          options: {
            presets: [ 'env' ],
            compact: ENV == 'prod' ? true : false,
            comments: ENV == 'prod' ? false : true,
            minified: ENV == 'prod' ? true : false,
            sourceMaps: ENV == 'dev' ? true : false
          }
        },

        {
          test: /\.(css|sass|scss)$/,
          loader: ETP.extract({
            use: [
              {
                loader: 'css-loader',
                options: {
                  sourceMap: ENV == 'dev' ? true : false,
                  minimize: ENV == 'dev' ? false : true,
                  url: false
                }
              },

              {
                loader: 'postcss-loader',
                options: {
                  sourceMap: ENV == 'dev' ? true : false,
                  plugins: () => [ require('autoprefixer')({browsers: 'last 4 versions'}) ]
                }
              },

              {
                loader: 'sass-loader',
                options: {
                  sourceMap: ENV == 'dev' ? true : false,
                  sourceMapContents: ENV == 'dev' ? true : false
                }
              }
            ]
          })
        },
      ]
    },

    plugins: plugins,
    devtool: ENV == 'dev' ? 'source-map' : ''
  }
};


