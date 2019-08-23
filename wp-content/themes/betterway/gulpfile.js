let gulp = require('gulp');
let sass = require('gulp-sass');
let plumber = require('gulp-plumber');
let autoprefixer = require('autoprefixer');
let postcss = require('gulp-postcss');

gulp.task('sass', function(){
    return gulp
        .src('sass/**/*.scss')
        .pipe(
            plumber({
                errorHandler: function (err) {
                    console.log(err);
                    this.emit('end');
                }
            })
        )
        .pipe(sass({errLogToConsole: true}))
        .pipe(postcss([autoprefixer()]))
        .pipe(gulp.dest('css'));
});


gulp.task('watch', function(){
    gulp.watch('sass/**/*.scss', gulp.series('styles'));
});

gulp.task('styles', function(callback) {
    gulp.series('sass')(callback);
});


gulp.task('default', gulp.series('watch'));