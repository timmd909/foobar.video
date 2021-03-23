'use strict';

module.exports = {
  css: {
    files: [
      {
        'public_html/css/bootstrap.css': 'node_modules/timstrap/dist/css/bootstrap.css',
      },
      {
        expand: true,
        flatten: true,
        src: ['vendor/fortawesome/font-awesome/css/*.css'],
        dest: 'public_html/fontawesome/',
      },
      {
        expand: true,
        flatten: true,
        src: ['vendor/fortawesome/font-awesome/webfonts/*'],
        dest: 'public_html/webfonts/',
      },
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
