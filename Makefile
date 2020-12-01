# composer lint:wpcs : checks all PHP files against PHP Coding Standards.
# composer lint:wpfix : Fixes code to PHP Coding Standards.
# composer lint:php : checks all PHP files for syntax errors.
# composer make-pot : generates a .pot file in the languages/ directory.
# npm run compile:css : compiles SASS files to css.
# npm run compile:rtl : generates an RTL stylesheet.
# npm run watch : watches all SASS files and recompiles them to css when they change.
# npm run lint:scss : checks all SASS files against CSS Coding Standards.
# npm run lint:js : checks all JavaScript files against JavaScript Coding Standards.
# npm run bundle : generates a .zip archive for distribution, excluding development and system files.

watch:
	npm run watch

install:
	composer install
	npm install

dev-build:
	npm run bundle

build: lint
	npm run bundle

lint:
	composer lint:php
	composer lint:wpcs
	npm run lint:scss
	npm run lint:js
