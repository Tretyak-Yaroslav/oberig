const path = require('path')
const webpack = require('webpack')

module.exports = {
  resolve: {
    extensions: ['.js'],
    alias: {
      '@modules': path.resolve(__dirname, './resources/js/js-modules/')
    }
  },
}