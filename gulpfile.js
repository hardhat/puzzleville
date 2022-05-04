const gulp = require('gulp')
const include = require('gulp-include')
 
const srcPath         = 'src/'; // Path to our source files
const distPath        = 'dist/'; // Path to your distribution files

function html() {
  return gulp.src(srcPath+'*.html')
    .pipe(include({
	extensions: 'html',
        hardFail: true,
      }))
      .on('error', console.log)
    .pipe(gulp.dest(distPath))
}

function ico() {
  return gulp.src(srcPath+'*.ico')
    .pipe(gulp.dest(distPath))
}

function image() {
  return gulp.src(srcPath+'img/**')
    .pipe(gulp.dest(distPath+'img/'))
}

function fonts() {
  return gulp.src(srcPath+'fonts/**')
    .pipe(gulp.dest(distPath+'fonts/'))
}

function js() {
  return gulp.src(srcPath+'js/**')
    .pipe(gulp.dest(distPath+'js/'))
}

function css() {
  return gulp.src(srcPath+'css/**')
    .pipe(gulp.dest(distPath+'css/'))
}

function php() {
  return gulp.src(srcPath+'**/*.php')
    .pipe(gulp.dest(distPath))
}

exports.default = gulp.series(html,ico,image,fonts,js,css,php);
