var gulp = require("gulp");
var sass = require("gulp-sass");

gulp.task('style', function style() {
    return (
        gulp
            .src("./catalog/view/theme/default/stylesheet/**/*.scss")
            .pipe(sass())
            .on("error", sass.logError)
            .pipe(gulp.dest("./catalog/view/theme/default/stylesheet"))
    );
});

gulp.task('watch', function watch(){
        gulp.watch('./catalog/view/theme/default/stylesheet/**/*.scss', gulp.series('style'))
    }
)

gulp.task('default', gulp.parallel('style', 'watch'));