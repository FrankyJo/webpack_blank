need add group media query when compile scss to css<br>
need fix problem with runtime ( js crash if use async await ) https://stackoverflow.com/questions/33527653/babel-6-regeneratorruntime-is-not-defined<br>
need add postcc config (postcc-preset env, ccsnano,autoprefixre)<br>
module.exports = {
    plugins: [
        require('postcss-preset-env')(),
        require('cssnano')(),
        require('autoprefixer')
    ]
};
