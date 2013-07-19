module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            front: {
                options: {
                    yuicompress: true,
                },
                files: {
                    'asset/css/main-<%= pkg.version %>.css': [
                        'bower_components/normalize-css/normalize.css',
                        'asset/internal/css/main.less'
                    ]
                }
            },
            frontAlt: {
                options: {
                    yuicompress: false,
                },
                files: {
                    'asset/css/main-<%= pkg.version %>-dev.css': [
                        'bower_components/normalize-css/normalize.css',
                        'asset/internal/css/main.less'
                    ]
                }
            }
        },
        watch: {
            app: {
                files: 'asset/internal/css/main.less',
                tasks: ['less:front', 'less:frontAlt']
            }
        },
        connect: {
            hq: {
                options: {
                    port: 8080,
                    base: '.'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-bump');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-php-set-constant');

    //grunt.registerTask('default', ['clean', 'less', 'uglify', 'setPHPConstant']);
    grunt.registerTask('default', ['less']);

};