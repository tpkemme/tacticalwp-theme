# Change Log

## [v1.0.3](https://github.com/tpkemme/tacticalwp-theme/tree/v1.0.3) (2017-07-04)

**Fixed bugs:**

- Fixed an error where the accordion menu shortcode was calling the incorrect walker class
- Fixed gulp phpcs and travis script so they correctly exclude the 'wpcs' and 'php-codesniffer' directories used only for testing


## [v1.0.2](https://github.com/tpkemme/tacticalwp-theme/tree/v1.0.2) (2017-06-08)

**Fixed bugs:**

- Fixed two fatal errors that prevent the plugin from installing
- Fixed update functionality
- Modified composer script to remove all development files from release zip


## [v1.0.1](https://github.com/tpkemme/tacticalwp-theme/tree/v1.0.1) (2017-06-08)

**Implemented enhancements:**

- Added Google Analytics section in Advanced Settings for GA tracking
- Travis CI config actually works now by specifically using v2.9 of PHPCS
- Added `npm run travis` command for running phpcs on Theme

**Fixed bugs:**

- Correctly formatted ALL php files according to Wordpress Coding Standards
- Fixed gulp issues with phpcs and phpcbf tasks
