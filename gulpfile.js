var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify');

// Uglify JS
gulp.task('scripts', function() {
    gulp.src('js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('js/min'));
});

// Compile and compress sass
gulp.task('styles', function() {
    gulp.src('css/**/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('css/min'));
});


// Watches files for changes
gulp.task('watch', function() {
    gulp.watch('js/*.js', ['scripts']);
    gulp.watch('css/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);
