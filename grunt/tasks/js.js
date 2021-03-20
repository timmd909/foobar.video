'use strict';

module.exports = function (grunt) {
  grunt.registerTask('js', [
    'clean:js',
    'copy:js',
  ]);
};
