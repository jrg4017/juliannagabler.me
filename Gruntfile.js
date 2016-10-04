/* global module, require */
/* jshint maxlen: 130 */
module.exports = function(grunt) {
    'use strict';

    //TODO read http://quickleft.com/blog/grunt-js-tips-tricks
    var ifProdBuild, ifDevBuild;
    require('load-grunt-config')(grunt);
    require('time-grunt')(grunt);

    //set with command line
    ifProdBuild = grunt.option('production');
    ifDevBuild = !grunt.option('production');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            options: {
                compress: ifProdBuild,
                sourceMap: !ifProdBuild,
                outputSourceFiles: true
            },

            web: {
                options: {
                    sourceMapURL: '/css/main.css.map',
                    sourceMapFilename: 'web/css/main.css.map'
                },

                files: {
                    'web/css/main.css': 'app/Resources/sass/main.scss'
                }
            }
        },

        jshint: {
            // HACK The following bit of merge wtf! is to allow loading the existing
            // .jshintrc file and then apply development-only options to prevent
            // warnings when using, for example, "console.log()".
            options: grunt.util._.merge(
                grunt.file.readJSON('./.jshintrc'),
                {
                    devel: ifDevBuild,
                    reporter: require('jshint-stylish')
                }
            ),
            all: ['app/Resources/js/**/*.js', 'Gruntfile.js']
        },

        uglify: {
            vendor: {
                files: {
                    'web/js/vendor.min.js': [
                        'bower_components/jquery/dist/jquery.js',
                        'bower_components/bootstrap/dist/js/bootstrap.js'
                    ]
                }
            },
            global: {
                files: {
                    'web/js/site.min.js': 'js/global/**/*.js'
                }
            },
            options: {
                sourceMap: true,
                sourceMapIncludeSources: true
            }
        },

        copy: {
            cssAsScss: {
                expand: true,
                cwd: 'web/vendor/',
                src: '**/*.css',
                dest: 'web/vendor/',
                filter: 'isFile',
                ext: '.scss'
            }
        },

        watch: {
            sass: {
                files: 'app/Resources/sass/**/*.scss',
                tasks: ['sass']
            },
            js: {
                files: 'app/Resources/js/**/*.js',
                tasks: ['jshint', 'uglify:global', 'uglify:pages']
            }
        }
    });

    // Task aliases

    grunt.registerTask(
        'default',
        'Recompile css and javascript when changes detected',
        ['watch']
    );

    grunt.registerTask('build', 'Build project', [
        'copy',
        'sass',
        'uglify'
    ]);

};
