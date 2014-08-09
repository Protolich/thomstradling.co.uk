module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
					'site/styles/css/styles.css': 'site/styles/sass/styles.scss',
					'site/styles/css/editor.css': 'site/styles/sass/editor.scss',
					'site/styles/css/print.css': 'site/styles/sass/print.scss'
				}
			}
		},
		watch: {
			styles: {
				files: '**/*.scss',
				tasks: ['default'],
				options: {
					interrupt: true
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');

	grunt.registerTask('default', ['sass']);
	// grunt.registerTask('watch', ['watch']);
};