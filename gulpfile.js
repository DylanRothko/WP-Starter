var gulp = require('gulp'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    minifyCss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    include = require("gulp-include"),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch');

gulp.task('default', ['scss', 'js']);

gulp.task('scss', function(done) {
  gulp.src('./scss/app.scss')
    .pipe(sass())
    .on('error', sass.logError)
    .pipe(minifyCss({
      keepSpecialComments: 0
    }))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(gulp.dest('./dist/'))
    .on('end', done);
});

gulp.task('js', function(done) {
  gulp.src('./js/*.js')
    .pipe(include())
      .on('error', console.log)
    .pipe(uglify({ mangle: false }))
    .pipe(rename({ extname: '.min.js' }))
    .pipe(gulp.dest('./dist/'))
    .on('end', done);    
});

gulp.task('watch_assets', function() {
  gulp.watch('scss/**/*.scss',['scss']); 
  gulp.watch('js/**/*.js',['js']); 
});