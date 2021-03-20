/**
 * @author Tim Doerzbacher <tim@tim-doerzbacher.com>
 * Based on the Gruntfile.js from https://github.com/timmd909/catpoo
 */
'use strict';

module.exports = function(grunt) {

  var path = require('path');
  require('time-grunt')(grunt);

  require('load-grunt-config')(grunt, {
    // path to task.js files, defaults to grunt dir
    configPath: path.join(process.cwd(), '/grunt/config'),

    // auto grunt.initConfig
    init: true,

    // data passed into config.  Can use with <%= test %>
    data: {
      // ...
    }
  });

  grunt.file.expand('grunt/tasks/**/*.js').forEach(function (filename) {
    require(path.join(process.cwd(), filename))(grunt);
  });

  // Make UTF8 the default encoding for all I/O operations.
  grunt.file.defaultEncoding = 'utf8';

  // Make sure that colors are available:
  require('colors');
};
