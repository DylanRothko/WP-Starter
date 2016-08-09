# WordPress Starter Theme
### IN DEVELOPMENT & ABSOLUTELY UNUSABLE
My WordPress Starter Theme is not a production ready template.  It is intended for use as a boilerplate for those wishing to build a custom WordPress theme using modern(ish) development tools and practices.  This template assumes you have at least basic knowledge of WordPress, PHP, SCSS and JavaScript.  Knowledge of bower, npm and gulp isn't necessary but will be very helpful for extending the theme further.

##### Development Requirements

##### Installation
run ```bower install --save && npm install --save-dev```

##### Adding Your Own Code
###### Assets
You are encouraged to use the ```js/app.js``` and ```scss/app.scss``` files to write your styling and javascript code.  While writing your code, running ```gulp watch_assets``` will watch your js & scss folders for updated files and automatically compile them to the ```/dist/``` directory.

##### Bower Dependencies
- normalize-scss
- bourbon
- neat

##### NPM Dependencies
- gulp
- gulp-concat
- gulp-include
- gulp-minify-css
- gulp-rename
- gulp-sass
- gulp-sourcemaps
- gulp-uglify
- gulp-util
- gulp-watch
- pump