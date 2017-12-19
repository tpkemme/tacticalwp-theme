# TacticalWP Wordpress Theme
[![Build Status](https://travis-ci.org/tpkemme/tacticalwp-theme.svg?branch=master)](https://travis-ci.org/tpkemme/tacticalwp-theme)
<img align="right" src="assets/images/icons/twpicon1.png" width="250" height="250" />

TacticalWP is a Wordpress theme based on Material design and built on Foundationpress and CMB2. The purpose of TacticalWP, is to act as a small and handy toolbox that contains the essentials needed to build any design using Wordpress.

One of the advantages of using a framework like Foundation 6 is that the structure for all site elements is already created before you start.  This was the intended purpose of Foundationpress, the Wordpress Theme built upon Foundation 6.  However, Foundationpress lacked real Wordpress integrations: Foundation elements could only be configured using HTML.

This is where TacticalWP really shines: every Foundation element of TacticalWP has an associated shortcode.  Users can insert customized Foundation elements anywhere on the site by simply generating a shortcode using the TacticalWP button in the Visual Editor.  If that's not enough, the TacticalWP settings will give users complete control over every part of the site's design.  This includes changing the global color palette and global typography settings with support for Google Fonts.

I did my best to keep everything well-documented.  If you are interested in contributing, please submit a pull request!  All contributions are welcome!

## Dev Requirements

**This project requires [Node.js](http://nodejs.org) v4.x.x to v6.9.x to be installed on your machine.** Please be aware that you will most likely encounter problems with the installation if you are using v7.1.0 with all the latest features.

TacticalWP uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

## Development Quickstart

### 1. Clone the repository and install with npm
```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://github.com/tpkemme/tacticalwp-theme.git tacticalwp
$ cd tacticalwp
$ npm install
```

### 2. While you're working on your project, run:

```bash
$ npm run watch
```

If you want to take advantage of browser-sync, there is a setting in the TacticalWP
Advanced section that will let you turn on browser-sync.
```bash
$ npm run watch
```

### 3. For building all the assets, run:

```bash
$ npm run build
```

Build all assets minified and without sourcemaps:
```bash
$ npm run production
```

### 4. To create a .zip file of your theme, run:

```bash
$ npm run package
```

Running this command will build and minify the theme's assets and place a `.zip` archive of the theme in the `packaged` directory. This excludes the developer files/directories from your theme like `node_modules`, `assets/components`, etc. to keep the theme lightweight for transferring the theme to a staging or production server.

### Styles

Because all of the styles can be changed through the Wordpress admin section, their stylesheet is being generated as a php file.  All of the sass styles control the 'basic' Foundationpress styles and for the most part haven't been changed.

 * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the PHP file described below

 * `template-parts/embedded-styles.php`: This is the main stylesheet.  It creates a stylesheet with all the saved theme settings.

 The 'basic' styles I mentioned are the base styles of Foundationpress.  They are located here:

 * `assets/scss/twp.scss`: Make imports for all your styles here
 * `assets/scss/global/*.scss`: Global settings
 * `assets/scss/components/*.scss`: Buttons etc.
 * `assets/scss/modules/*.scss`: Topbar, footer etc.
 * `assets/scss/templates/*.scss`: Page template specific styling

Please note that you **must** run `npm run build` or `npm run watch` in your terminal for the styles to be copied and concatenated. See the [Gulpfile.js](https://github.com/tpkemme/tacticalwp-theme/blob/master/gulpfile.js) for details

### JQuery

Unlike Foundationpress, TacticalWP does not deregister the version of JQuery that is bundled with the Wordpress core.  All scripts in TacticalWP that depend on JQuery are working functionally with the core-registered version.  This reduces the possibility of code conflicts with other Wordpress plugins using JQuery.  I believe that it's best not to change any of the core behavior of Wordpress to maximize compatibility.

### Scripts

* `assets/javascript/custom`: This is the folder where you put all your custom scripts. Every .js file you put in this directory will be minified and concatenated one single .js file. (This is good for site speed and performance)

Please note that you must run `npm run build` or `npm run watch` in your terminal for the scripts to be copied and concatenated. See [Gulpfile.js](https://github.com/tpkemme/tacticalwp-theme/blob/master/gulpfile.js) for details

### The main styles and scripts generated by the build

Version control on these files are turned off because they are automatically generated as part of the build process.

* `assets/stylesheets/twp.css`: All Sass files are minified and compiled to this file
* `assets/stylesheets/twp.css.map`: CSS source maps

* `assets/javascript/vendor`: Vendor scripts are copied from `assets/components/` to this directory. We use this path for enqueing the vendor scripts in WordPress.

### Check For WordPress Coding Standards

TacticalWP comes with everything you need to run tests that will check your theme for WordPress Coding Standards. To enable this feature you'll need to install PHP Codesniffer, along with the WordPress Coding Standards set of "Sniffs". You'll need to have [Composer](https://getcomposer.org/) To install both run the following:
```bash
$ composer create-project wp-coding-standards/wpcs:dev-master --no-dev
```
When prompted to remove existing VCS, answer Yes by typing `Y`.

Once you have installed the packages, you can check your entire theme by running:
```bash
$ npm run phpcs
```

If there are errors that Code Sniffer can fix automatically, run the following command to fix them:
```bash
$ npm run phpcbf
```

I have found through testing that running phpcs using the above command (gulp-phpcs) is different that running phpcs through Travis-CI using the provided .travis.yml config file.  Despite using the same arguments, gulp-phpcs appears to not be as extensive when testing our code against the Wordpress Coding Standards.  Therefore, you can also use the following code to run phpcs using the same command that Travis uses:
```bash
$ npm run travis
```
The `travis` command will run phpcbf and phpcs and give you the same results that you would see from Travis-CI.  Because it seems to be more expansive when testing for coding standards than gulp-phpcs, it can take considerably longer than running `npm run phpcs`.  The best workflow would be to use `npm run phpcs` to test your code while you're making corrections.  When you've finished fixing all of the errors found by `npm run phpcs`, run `npm run travis` so you can verify you build will pass before pushing to your remote repository.

## Demo

* [Clean TacticalWP install](https://tacticalwp.com/)
* [TacticalWP Kitchen Sink - see every single element in action](https://tacticalwp.com/features/)

## Unit Testing With Travis-CI

TacticalWP is completely ready to be deployed to and tested by Travis-CI for WordPress Coding Standards and best practices. All you need to do to activate the test is sign up and follow the instructions to point Travis-CI towards your repo. Just don't forget to update the status badge to point to your repositories unit test.
[Travis-CI](https://travis-ci.org/)

## Contributing
#### Here are ways to get involved:

1. [Star](https://github.com/tpkemme/tacticalwp-theme/stargazers) the project!
2. Answer questions that come through [GitHub issues](https://github.com/tpkemme/tacticalwp-theme/issues)
3. Report a bug that you find
4. Share a theme you've built on top of TacticalWP

#### Pull Requests

Pull requests are highly appreciated. Please follow these guidelines:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover
2. Make sure that your code is bug-free and does not introduce new bugs
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request)
4. Verify that all the Travis-CI build checks have passed

## Testing
[![Browserstack](https://www.browserstack.com/images/layout/browserstack-logo-600x315.png)](http://browserstack.com/)

I use Browserstack with an Open Source License to test this theme on a variety of browsers and devices.  I highly recommend Browserstack for anyone working on an open source project!
