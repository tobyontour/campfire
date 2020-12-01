Campfire
========

Introduction
------------

This is a Wordpress theme designed for UK Scout groups. It uses the colours and icons to match the
Scouting brand guidelines.

The intention is to be a clean, fast, and uncomplicated theme to setup. It should work perfectly
well on mobiles, tablets, and desktops.

More info can be found on [my website](https://techtoby.com/campfire/)

Supported plugins
-----------------

1. `Breadcrumb NavXT` - This will give you breadcrumbs.


Development
-----------

### Requirements

`Campfire` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Setup

To start using all the tools that come with `Campfire` you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm and install
```

### Available CLI commands

`Campfire` is based on `_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.
