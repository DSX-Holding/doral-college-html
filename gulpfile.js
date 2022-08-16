const gulp = require('gulp')

const plumber = require('gulp-plumber')
const sass = require('gulp-sass')
const cleanCSS = require('gulp-clean-css')
const sourcemaps = require('gulp-sourcemaps')
const shorthand = require('gulp-shorthand')
const autoprefixer = require('gulp-autoprefixer')


gulp.task('styles', function (){
    return gulp.src('./app/scss/**/style.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(shorthand())
        .pipe(cleanCSS({
            debug: true,
            compatibility: '*'
        }, details => {
            console.log(`${details.name}: Original size:${details.stats.originalSize} - Minified size: ${details.stats.minifiedSize}`)
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('app/css'))
});

gulp.task('watch', function (){
    gulp.watch('./app/scss/**/*.scss', gulp.series('styles'));
});