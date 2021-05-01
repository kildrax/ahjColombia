'use strict';
var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer');
var sass = require('gulp-sass');
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var rename = require("gulp-rename");

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  var plugins = [
    autoprefixer()
  ];
  return gulp.src('./sass/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(plugins))
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./css'));
});

gulp.task('scripts', () =>
  gulp.src('./js/*.js')
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./minjs'))
);

gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
  // gulp.watch('app/js/*.js', gulp.series('scripts'));
  // gulp.watch('app/img/*', gulp.series('images'));
});