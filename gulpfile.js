var gulp    = require('gulp');
var sass    = require('gulp-sass');
var concat  = require('gulp-concat');

gulp.task('styles', function(){
    return gulp.src([
        './assets/style/app.scss'
    ])
    .pipe(sass({
        includePaths: ['bower_components/foundation/scss/']
    }))
    .pipe(concat('app.css'))
    .pipe(gulp.dest('./public/css'));
});

gulp.task('script', function(){

    return gulp.src([
        './bower_components/modernizr/modernizr.js',
        './bower_components/jquery/dist/jquery.min.js',
        './bower_components/foundation/js/foundation.min.js',
    ])
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./public/js'));

});

gulp.task('default',['styles','script']);

gulp.task('watch', function(){
    gulp.watch('./assets/style/**/*.scss', ['styles']);
});