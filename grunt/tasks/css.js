'use strict';

module.exports = function (grunt) {
  grunt.registerTask('css', [
    'clean:css',
    'copy:css',
    'sass',
  ]);
};
