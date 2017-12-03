var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');

gulp.task('style', function () {
    var tailwindcss = require('tailwindcss');

    return gulp.src('sass/**/*.scss')
        .pipe(postcss([
            tailwindcss('./tailwind.js'),
            require('autoprefixer'),
        ]))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});

//Watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['style']);
});