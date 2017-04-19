var webpack = require('webpack'),
    path = require("path");

var commonsPlugin = new webpack.optimize.CommonsChunkPlugin('/js/common.js');
var publicPath = path.join(__dirname, "public");
var srcPath = path.join(publicPath, "src");

module.exports = {//插件项

    //页面入口文件配置
    entry: {
        admin: [srcPath + "/js/admin/index.js"],
        admin_content: [srcPath + "/js/admin/content.js"],
        www: [srcPath + "/js/www/index.js"]
    },
    //支持数组形式，将加载数组中的所有模块，但以最后一个模块作为输出
    output: {
        path: publicPath + "/dist",
        publicPath: "/public/dist/",
        filename: "/js/[name].js"
    },
    module: {	//加载器配置
        loaders: [
            {test: /\.css$/, loader: 'style-loader!css-loader'},
            {test: /\.js$/, loader: 'jsx-loader?harmony'},
            {test: /\.sass$/, loader: 'style!css!sass?sourceMap'},
            {test: /\.(png|jpg)$/,loader: 'url-loader?limit=8192&name=/img/[name]-[hash].[ext]'},
            {test: /\.(otf|eot|woff|woff2|ttf|svg|)$/,loader:"file-loader?limit=8192&name=/font/[name]-[hash].[ext]"}
        ]
    },
    //其它解决方案配置
    resolve: {
        root: [srcPath], //绝对路径
        alias:{
            publicPath: publicPath,
            bootStrap: "plugin/bootstrap",
            jQuery: "plugin/jquery/jquery.min.js",
            cssPath: "css"
        },
        extensions: ['', '.js', '.json', '.sass', '.css']
    },
    plugins: [
        commonsPlugin,
        new webpack.ProvidePlugin({
            $: 'jQuery',
            jQuery : 'jQuery'
        }),
        new webpack.DefinePlugin({
            'process.env.NODE_ENV': '"development"'
        }),
        new webpack.HotModuleReplacementPlugin()
    ]
};