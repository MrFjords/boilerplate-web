module.exports = function(grunt) {


  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    compass: {                  // Task
	    dist: {                   // Target
	      options: {              // Target options
	        sassDir: 'sass',
	        cssDir: 'stylesheets/dev',
	        outputStyle: 'nested',
          noLineComments: false
	      }
	    }
	},
	cssmin: {
      options: {
        banner : " /* David Brown */ "
      },
      dist: {
        files: {
          'stylesheets/style-mq.min.css': ['stylesheets/dev/style-mq.css'],
          'stylesheets/style-no-mq.min.css': ['stylesheets/dev/style-no-mq.css']
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.


  // Default task(s).
  // grunt.registerTask('default', ['watch']);
  grunt.registerTask('default', ['buildcss']);
  grunt.registerTask('buildcss',  ['compass', 'cssmin']);

};