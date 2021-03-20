'use strict';

module.exports = function (grunt) {
  grunt.registerTask('css', [
    'clean:css',
    'sass',
  ]);
};
