var gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const mozJpeg = require('imagemin-mozjpeg');
const pngQuant = require('imagemin-pngquant');
var newer = require('gulp-newer');
const imageminOptipng = require('imagemin-optipng');

const imagesSrc ="assets/images/src/**/*";
const imagessDest ="assets/images/prod";

gulp.task('images', () => {
  gulp.src('assets/images/src/**/*')
      .pipe(newer(imagessDest))
      .pipe(imagemin([
        pngQuant({
          quality: '40',
        }),
        imageminOptipng({
          optimizationLevel: 7
        }),
        mozJpeg({
          quality: 80,
          progressive: true
        }),

      ],
        {
          verbose: true
        }))
      .pipe(gulp.dest(imagessDest))
})

gulp.task('watch-images', ['images'], () => {
  gulp.watch(imagesSrc, ['images']);
});
