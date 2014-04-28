Apnet PHP coding standard
=========================

PSR-2 coding standard with two-spaces-indents

Installation
------------

Add requirements to composer.json:

``` json
{
  "require-dev" : {
    "squizlabs/php_codesniffer" : "~1.5,<2.0"
    "apnet/coding-standard" : "~1.5"
  }
}
```

Getting PHP_CodeSniffer report
------------------------------

Run `phpcs --standard=vendor/apnet/coding-standard/src/Apnet src` to analize code inside `src`
