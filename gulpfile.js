
var gulp = require('gulp');
var php = require('gulp-connect-php');
var browserSync = require('browser-sync');

gulp.task('start', function() {
    console.log('Gulp Start... OK');
});

gulp.task('browser-sync', function() {
    browserSync({
        open: true,
        notify: false,
        // port: 8888,
        server: {
            baseDir: "./"
        }
    });
});

gulp.task('php', function() {
    php.server();
});

gulp.task('php-sync', function() {
  php.server({ base: 'build', port: 8010, keepalive: true});
});

gulp.task('default', ['start', 'browser-sync', 'php'], function() {
    gulp.watch(['index.php'], browserSync.reload);
});
