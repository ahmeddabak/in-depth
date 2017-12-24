const path = require('path');

const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
let inProduction = (process.env.NODE_ENV === 'production');

const CleanWebpackPlugin = require('clean-webpack-plugin');
const WebpackAssetsManifest = require('webpack-assets-manifest');

// the path(s) that should be cleaned
let pathsToClean = [
    'assets/js',
    'assets/css'
];

// the clean options to use
let cleanOptions = {
    root: __dirname,
    watch: true
};

module.exports = {
    entry: {
        theme: [
            './sources/js/theme.js',
            './sources/sass/theme.scss'
        ],
        vendor: ['jquery']
    },
    output: {
        path: path.resolve(__dirname, './assets/'),
        filename: 'js/[name].[chunkhash].js'
    },
    module: {
        rules: [
            {
                test: /\.(scss|sass)$/i,
                use: ExtractTextPlugin.extract({
                    use: ['css-loader', 'sass-loader'],
                    fallback: 'style-loader'
                })
            },
            {
                test: "/\.css$/",
                use: ExtractTextPlugin.extract({
                    use: 'css-loader',
                    fallback: 'style-loader'
                })
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            },
            {
                test: /\.(png|jpe?g|gif)$/,
                loader: 'file-loader',
                options: {
                    name: 'images/[name].[ext]'
                }
            },
            {
                test: /\.(woff2?|ttf|eot|svg|otf)$/,
                loader: 'file-loader',
                options: {
                    name: 'fonts/[name].[ext]'
                }
            }
        ]
    },
    plugins: [
        new CleanWebpackPlugin(pathsToClean, cleanOptions),
        new ExtractTextPlugin({
            filename: "css/[name].[chunkhash].css"
        }),
        new webpack.LoaderOptionsPlugin({
            minimize: inProduction
        }),
        new WebpackAssetsManifest({
            output:  path.join(__dirname, 'assets/manifest.json'),
            publicPath : 'assets/'
        })
    ]
};

if (inProduction) {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin()
    )
}