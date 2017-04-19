var webpack = require('webpack'),
    path = require("path");

var publicPath = path.join(__dirname, "public");
var srcPath = path.join(publicPath, "src");

module.exports = {//插件项

    //页面入口文件配置
    entry: [
        "webpack-dev-server/client?http://0.0.0.0:8080",
        'webpack/hot/only-dev-server',
        srcPath + "/js/admin/index.js"
    ],
    //支持数组形式，将加载数组中的所有模块，但以最后一个模块作为输出
    output: {
        path: publicPath + "/dist",
        publicPath: "http://127.0.0.1:8080/public/dist/",
        filename: "/js/index.js"
    },
    module: {	//加载器配置
        loaders: [
            {test: /\.css$/, loader: 'style-loader!css-loader'},
            {test: /\.js$/, loader: 'jsx-loader?harmony'},
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
        extensions: ['', '.js', '.json', '.css']
    },
    plugins: [
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