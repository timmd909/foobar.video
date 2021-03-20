'use strict';

module.exports = function (grunt) {

  grunt.registerTask('default', 'Build assets', [
    'clean',
    'css',
    'js',
  ]);
}
