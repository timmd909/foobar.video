'use strict';

module.exports = {
  css: {
    files: [
      {
        'public_html/css/bootstrap.css': 'node_modules/timstrap/dist/css/bootstrap.css',
      }
    ],
  },
  js: {
    files: [
      {
        'public_html/js/jquery.js': 'node_modules/jquery/dist/jquery.min.js',
        'public_html/js/bootstrap.js': 'node_modules/timstrap/dist/js/bootstrap.bundle.min.js'
      }
    ],
  },
};
