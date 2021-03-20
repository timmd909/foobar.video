'use strict';

module.exports = {
  options: {
    includePaths: [
      'node_modules/bootstrap/scss',
      'node_modules/timstrap/scss',
    ],
    implementation: require('node-sass'),
    // style: 'compressed',
  },
  dist: {
    files: {
      'public_html/css/main.css': 'src/main.scss'
    },
  }
};
