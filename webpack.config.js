const webpack = require('webpack')
const path = require('path')
const IgnoreEmitPlugin = require('ignore-emit-webpack-plugin');
const {CleanWebpackPlugin} = require('clean-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require("copy-webpack-plugin");

const glob = require('glob');

const ENV = process.env;

const isWatchMode = ENV.WATCH === 'true';

const getEntries = (pattern, extension) => glob
    .sync(pattern)
    .reduce((entries, filename) => {
        const file = filename.split('/').pop();
        const [name] = file.match(/([a-z-A-Z-0-9]+)(?=\.[a-z]+)/g);
        const entryName = `${extension}/${name}`;
        return {...entries, [entryName]: filename};
    }, {});

const PATHS = {
    src_js: path.resolve(__dirname, 'src/js'),
    src_css: path.resolve(__dirname, 'src/css'),
    src_img: path.resolve(__dirname, 'src/img')
};

module.exports = {
    mode: ENV.NODE_ENV,
    watch: isWatchMode,
    entry: {
        ...getEntries(`${PATHS.src_js}/script.js`, 'js'),
        ...getEntries(`${PATHS.src_css}/*.scss`, 'css')
    },
    output: {
        path: path.resolve(__dirname, 'public')
    },
    devtool: ENV.NODE_ENV === 'development' ? 'source-map' : false,
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                }
            },
            {
                test: /\.(sa|sc|c)ss$/,
                exclude: /node_modules/,
                include: PATHS.src_css,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'postcss-loader',
                    'sass-loader',
                ],
            },
        ],
    },
    plugins: [
        new CleanWebpackPlugin(),
        new IgnoreEmitPlugin(/(css)\/.*\.(js)/),
        new MiniCssExtractPlugin(),
        // Copy the images folder and optimize all the images
        new CopyWebpackPlugin({
            patterns: [
                {from: `${PATHS.src_img}`, to: `img`}
            ]
        }),
        new ImageminPlugin({ test: /\.(jpe?g|png|gif|svg)$/i })
    ]
}