var gulp = require( 'gulp' );
var less = require( 'gulp-less' );
var minifyCss = require( 'gulp-minify-css' );
var autoprefixer = require( 'gulp-autoprefixer' );
var uglify = require( 'gulp-uglify' );
var concat = require( 'gulp-concat' );

// LESS
var b2w = 'build/less/b2w/styles.less',
    bootstrapLess = ['build/less/libs/bootstrap/*.less', 'build/less/libs/bootstrap/mixins/*.less'],
    masterLess = [ bootstrapLess, b2w ],
    cssTarget = 'b2w/assets/css/';

// JS
var masterJS = [ 'build/js/b2w/*.js', 'build/js/libs/bootstrap/tooltip.js', 'build/js/libs/bootstrap/*.js' ], // tooltip.js needs to be loaded first
    jsTarget = 'b2w/assets/js/';


gulp.task('build-less', function(){
    console.log( b2w );
    console.log( cssTarget );
    gulp.src( b2w )
        .pipe(less())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCss( { keepBreaks: true } ))
        .pipe(gulp.dest( cssTarget ));

    console.log( 'Finished compiling LESS files to ' + cssTarget );
});

gulp.task( 'build-js', function(){
    console.log( masterJS );
    console.log( jsTarget );
    gulp.src( masterJS )
        .pipe( concat( 'scripts.js' ) )
        //.pipe( uglify() )
        .pipe( gulp.dest( jsTarget ) );

    console.log( 'Finished compiling all JS files, and sending to ' + jsTarget );
});

gulp.task( 'watch', function(){
    gulp.watch( masterLess, [ 'build-less' ] );
    gulp.watch( masterJS, [ 'build-js' ] );
});
gulp.task( 'default', [ 'build-less', 'build-js', 'watch' ] );