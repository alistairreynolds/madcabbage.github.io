module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-responsive-images');

    grunt.initConfig({
        responsive_images: {
            myTask: {
                options: {
                    sizes: [{
                        width: 150,
                    },{
                        width: 320,
                    },{
                        width: 640,
                    },{
                        width: 1024,
                        upscale: false,
                    }]
                },
                files: [{
                    expand: true,
                    src: ['**.{jpg,gif,png}'],
                    cwd: 'playground/images/responsive_source/portfolio',
                    dest: 'playground/images/responsive_resized/portfolio/'
                }]
            }
        },
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('responsive_images');

    // Default task(s).
    grunt.registerTask('default', ['responsive_images']);

};