# The French Copywriter - Starter Kit - Symfony 4.4.\*

This starter kit is here to easily install The French Copywriter's repository.

## Getting Started for Projects

### Prerequisites

1. Check php is installed
2. Check symfony is installed
3. Check composer is installed
4. Check yarn & node are installed

### Install

1. Clone this project
2. Run `composer install`
3. Run `yarn install`

### Working

1. Run `php bin/console server:run` to launch your local php web server
2. Run `yarn run dev --watch` to launch your local server for assets
3. Run `mysql.server start` to launch mysql database
4. Go on `https://localhost:8000/` to visit the website

### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`

## Load fixtures

In order to load fixtures in the database so they could be visible on your website, please run :

1. Run `php bin/console make:migration` to create the migration file
2. Run `php bin/console make:migrations:migrate` to create the database's tables
3. Run `php bin/console doctrine:fixtures:load` to load fixtures on the database

## Deployment

Add additional notes about how to deploy this on a live system

### Testing

1. Run `./bin/phpcs` to launch PHP code sniffer
2. Run `./bin/phpstan analyse src --level max` to launch PHPStan
3. Run `./bin/phpmd src text phpmd.xml` to launch PHP Mess Detector
4. Run `./bin/eslint assets/js` to launch ESLint JS linter
5. Run `./bin/sass-lint -c sass-linter.yml` to launch Sass-lint SASS/CSS linter

## Built With

- [PHP](https://www.php.net/downloads)
- [Symfony](https://github.com/symfony/symfony)
- [Composer](https://getcomposer.org/download/)
- [Yarn](https://yarnpkg.com/en/docs/install#mac-stable)
- [Node](https://nodejs.org/en/)
- [GrumPHP](https://github.com/phpro/grumphp)
- [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
- [PHPStan](https://github.com/phpstan/phpstan)
- [PHPMD](http://phpmd.org)
- [ESLint](https://eslint.org/)
- [Sass-Lint](https://github.com/sasstools/sass-lint)
- [Travis CI](https://github.com/marketplace/travis-ci)
