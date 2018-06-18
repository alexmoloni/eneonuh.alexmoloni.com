var gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const mozJpeg = require('imagemin-mozjpeg');
const pngQuant = require('imagemin-pngquant');
var newer = require('gulp-newer');

const imagesSrc ="assets/images/src/**/*";
const imagessDest ="assets/images/prod";

gulp.task('images', () => {
  gulp.src(imagesSrc)
      .pipe(newer(imagessDest))
      .pipe(imagemin([
        mozJpeg({
          quality: 80,
          progressive: true
        }),
        pngQuant({
          quality: '80',
        })
      ],
        {
          minFileSize: 40000
        }
      ))
      .pipe(gulp.dest(imagessDest))
});

gulp.task('watch-images', ['images'], () => {
  gulp.watch(imagesSrc, ['images']);
});
