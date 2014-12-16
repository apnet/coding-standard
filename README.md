# Symfony2 PHP_CodeSniffer Coding Standard

A composer installable coding standard to check against the [Symfony coding standards](http://symfony.com/doc/current/contributing/code/standards.html).

This project was based on the [standard provided by @lapistano](https://github.com/lapistano/Symfony2-coding-standard)

## Installation

This coding standard can be installed via composer or be used in you PHP_CodeSniffer install over PECL. Both ways are
described in the following but the composer way is recommedend:

### Using Composer

1. Install The standard as dependency of your composer based project (It will install the composer version of PHP_CodeSniffer as dependency):

        $ php composer.phar require --dev leaphub/phpcs-symfony2-standard:~2.0.0

2. Profit!

        $ bin/phpcs --standard=vendor/leaphub/phpcs-symfony2-standard/leaphub/phpcs/Symfony2/ --extensions=php src/

### Using PEAR

1. Install PHP_CodeSniffer:

        $ pear install PHP_CodeSniffer

2. Find your PEAR directory:

        $ pear config-show | grep php_dir

3. Copy, symlink or check out this repo to a folder called Symfony2 inside the
   phpcs `Standards` directory:

        $ cd /path/to/pear/PHP/CodeSniffer/Standards
        $ git clone git@github.com:leaphub/phpcs-symfony2-standard.git Symfony2

4. Set Symfony2 as your default coding standard if cou want:

        $ phpcs --config-set default_standard Symfony2

5. Profit!

        $ phpcs --standard=Symfony2 --extensions=php src/

# Contributing

If you do contribute code to these sniffs, please make sure it conforms to the PEAR
coding standard and that the Symfony2-coding-standard unit tests still pass.

To check the coding standard, run from the Symfony2-coding-standard source root:

    $ phpcs --ignore=*/tests/* --standard=PEAR . -n

The unit-tests are run from within the PHP_CodeSniffer directory:

    $ phpunit --filter Symfony2_* tests/AllTests.php
