var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

var paths = {
  sass: ['sass/**/*.scss']
};

gulp.task('sass', function() {
  gulp.src('sass/styles.scss')
    .pipe(sass())
    .pipe(rename({ extname: '.css' }))
    .pipe(gulp.dest('css'))
});

gulp.task('watch', function() {
  gulp.watch(paths.sass, ['sass']);
});