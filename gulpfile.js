
var gulp = require('gulp');
var php = require('gulp-connect-php');
var browserSync = require('browser-sync');

var reload  = browserSync.reload;

gulp.task('start', function() {
    console.log('Gulp Start... OK');
});

gulp.task('php', function() {
     php.server({});
    //php.server({ base: 'app', port: 8888, keepalive: true});
});

gulp.task('php-sync', function() {
    php.server({ base: 'build', port: 8010, keepalive: true});
});

gulp.task('browser-sync', ['php-sync'], function() {
    browserSync({
        proxy: '127.0.0.1:8000'
        // open: true,
        // notify: false,
        // port: 8888,
        // server: {
        //     baseDir: "./"
        // }
    });
});

gulp.task('default', ['start', 'browser-sync'], function() {
    gulp.watch(['index.php'], [reload]);
});

// var gulp = require('gulp');
// var connect = require('gulp-connect-php');
// var browserSync = require('browser-sync');
 
// gulp.task('connect-sync', function() {
//   connect.server({}, function (){
//     browserSync({
//        proxy: '127.0.0.1:8000'
//     });
//   });
 
//   gulp.watch('**/*.php').on('change', function () {
//     browserSync.reload();
//   });
// });

// gulp.task('default', ['connect-sync'], function(){

// });
