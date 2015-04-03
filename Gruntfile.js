 'use strict';
module.exports = function (grunt){
    require("time-grunt")(grunt);
    require('load-grunt-tasks')(grunt);
	require("rsyncwrapper").rsync;

	 //loading grunt tasks
    grunt.loadNpmTasks('grunt-php');
	grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-phplint');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-bower-task');
    grunt.loadNpmTasks('grunt-rsync');
    grunt.loadNpmTasks('grunt-htmlhint');

 //grunt options
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
           //package options

        compass: {
        	dev: {
            	options: {
              		sassDir: 'assets/sass',
              		cssDir: './',
              		fontsDir: 'assets/fonts',
              		javascriptsDir: 'assets/js',
              		imagesDir: 'assets/img',
              		force:true,
              		relativeAssets: true,
            	}
          	}
        },
        jshint:{
        	files: ['assets/js/*.js'],
        	options: {
            	globals: {
                	jQuery: true
              	}
        	}
        },
        concat: {
        	dev: {
        		src: ['assets/js/*.js' ],
      			dest: 'assets/js/build/dev.js'
    		  }
    	 },
  		uglify: {
  				target: {
    				src: '<%= concat.dev.dest %>',
    				dest: '../parentup_production/assets/js/main.min.js'
  				}
		  },
		  imagemin: {
   				dist: {
      				options: {
        				optimizationLevel: 5
      				},
      				files: [{
         				expand: true,
         				cwd: 'assets/img',
         				src: ['**/*.{png,jpg,gif}'],
         				dest: '../parentup_production/assets/img'
      				}]
   				}
		  },
		  phplint:{
            all: [ '*.php', 'assets/php/**/*.php']
		  },

      htmlhint: {
  			php: {
    			options: {
    	  			'tag-pair': true
    			},
    			src: ['**/*.php']
  			},
        html1: {
          options: {
              'tag-pair': true
          },
          src: ['*.html', ]
        }
		  },
		  watch: {
			 options: {
            	livereload: true,
            	spawn: false
          	},
        	scripts: {
            	files: ['assets/js/**/*.js'],
            	tasks: ['jshint', 'concat']
          	},
          	compass: {
            	files: ['assets/sass/{,*/}*.{scss,sass}'],
            	tasks: ['compass:dev']
          	},
          	php: {
            	files: ['*.php', 'assets/php/{,*/}*.php'],
            	tasks : ['phplint']
          	}/*,
          	html: {
          		files :['**php'],
          		tasks : ['htmlhint']
          	}*/
        },
		rsync: {
    		options: {
        		args: ["--verbose"],
        		exclude: [".git*","*.scss","node_modules",".bowerrc", "bower.json", "livereload.js", "Gruntfile.js", ".sass-cache", 'src', 'Main', 'bootstrap/grunt','bootstrap/js','bootstrap/less','bootstrap/fonts' ,'pro', 'build', 'sass/_bootstrapSass', 'sass/_partials' ,'sass/style.scss', 'sass/download-monitor.html.zip' ,'sass/img.zip' ,'package.js', 'LICENSE' ,'package.json', 'js/script.js', 'designs', '.DS_Store', 'config.rb'],
        		recursive: true
    		},
    		dist: {
        		options: {
            		src: "./",
            		dest: "../parentup_production"
        		}
    		},
    		stage: {
        		options: {
            		src: "../parentup_production",
            		dest: "/var/www/site",
            		host: "user@staging-host",
           			// delete: true // Careful this option could cause data loss, read the docs!
        		}
    		},
    		prod: {
        		options: {
            		src: "../parentup_production",
            		dest: "/var/www/site",
            		host: "user@live-host",
            		//delete: true // Careful this option could cause data loss, read the docs!
        		}
    		}
		}
	});



    //register tasks here


    grunt.registerTask('go-all', ['watch', 'compass:dev', 'jshint', 'phplint', 'htmlhint:php' ]);

    grunt.registerTask('go', ['watch', 'compass:dev', 'jshint', 'phplint' ]);

    grunt.registerTask('build-pro', [ 'concat' , 'uglify','imagemin' , 'rsync:dist']);

    grunt.registerTask('pro', [  'rsync:dist']);

    grunt.registerTask('ug', [ 'uglify', 'rsync:dist']);

    grunt.registerTask('upload', 'rsync:prod');

     grunt.registerTask('html', 'htmlhint:html1');


}