module.exports = {
  "assetsDir": "assets",
  "filenameHashing": false,
  "configureWebpack": {
    "devtool": process.env.NODE_ENV == "development" ? "source-map" : "none",
    watchOptions: {
      poll: 1000,
    },
  },
  "css": {
    "extract": {
      "filename": "assets/css/[name].css"
    },
    "loaderOptions": {
      "sass": {}
    }
  },
  "pluginOptions": {
    "svg": {
      "data": {}
    }
  }
}