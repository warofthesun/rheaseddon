var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('watch', function(){
  gulp.watch('scss/*.scss', ['sass']);
  // Other watchers
})

gulp.task('sass', function(){
  return gulp.src('scss/style.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe( autoprefixer( 'last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4' ) )
    .pipe(gulp.dest('./'))
});
