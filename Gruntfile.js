module.exports = function ( grunt ) {
  'use strict';

  require( 'time-grunt' )( grunt );

  require( 'jit-grunt' )(
    grunt, {}
  );

  grunt.initConfig(
    {

      pkg: grunt.file.readJSON( 'package.json' ),

      //------------------------------------------------------------------------------
      // Details
      //------------------------------------------------------------------------------

      opt: {
        plugin: {
          name: 'ACF Simply Events',  // Name of the plugin
          slug: 'acf-simply-events',  // Slug of the plugin
        },
        path:   {
          js:   'assets/js',        // Path to JavaScript files
          css:  'assets/css',       // Path to CSS files
          scss: 'assets/scss',      // Path to Scss files
        },
      },

      //------------------------------------------------------------------------------

      // JavaScript Stuff

      // // uglify to concat, minify, and make source maps
      uglify: {
        main: {
          options: {
            sourceMap:     true,
            sourceMapName: '<%= opt.path.js %>/main.js.map',
          },
          files:   {
            '<%= opt.path.js %>/<%= opt.plugin.slug %>.min.js': [ '<%= opt.path.js %>/main.js' ],
          }
        }
      },

      // SCSS/CSS Stuff

      // // SCSS
      sass: {
        options: {
          update: true,
          style:  'expanded'
        },
        dist:    {
          files: {
            '<%= opt.path.css %>/<%= opt.plugin.slug %>.css': [ '<%= opt.path.scss %>/style.scss' ],
          }
        }
      },

      postcss: {
        styleHuman: {
          options: {
            map:        false,
            processors: [
              require( 'pixrem' )(), require( 'autoprefixer' )(
                {
                  browsers: [
                    'last 3 versions', 'ie 8', 'ie 9'
                  ]
                }
              ),
            ]
          },
          src:     '<%= opt.path.css %>/<%= opt.plugin.slug %>.css',
          dest:    '<%= opt.path.css %>/<%= opt.plugin.slug %>.css',
        },

        styleMin: {
          options: {
            map:        false,
            processors: [
              require( 'cssnano' )()
            ]
          },
          src:     '<%= opt.path.css %>/<%= opt.plugin.slug %>.css',
          dest:    '<%= opt.path.css %>/<%= opt.plugin.slug %>.min.css',
        },
      },

      // watch
      watch: {
        scss: {
          files: [
            '<%= opt.path.scss %>/**/*.scss'
          ],
          tasks: [
            'scss'
          ]
        },
        js:   {
          files: [
            '<%= opt.path.js %>/**/*.js'
          ],
          tasks: [
            'js'
          ]
        },
      }
    }
  );

  grunt.registerTask(
    'init', [
      'string-replace:all',
    ]
  );

  grunt.registerTask(
    'js', [
      'uglify',
    ]
  );

  grunt.registerTask(
    'scss', [
      'sass', 'postcss',
    ]
  );

  grunt.registerTask( 'default', [ 'watch' ] );

};