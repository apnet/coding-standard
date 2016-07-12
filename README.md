Apnet PHP PSR-2 coding standard
===============================

Installation
------------

Add requirements to composer.json:

``` json
{
  "require-dev" : {
    "apnet/coding-standard" : "~3.0"
  }
}
```

Sniffs
------

* PSR2
* PEAR.Commenting.InlineComment
* PEAR.ControlStructures.MultiLineCondition
* PEAR.WhiteSpace.ObjectOperatorIndent
* Symfony2.Classes.MultipleClassesOneFile
* Symfony2.Commenting.ClassComment
* Symfony2.Commenting.FunctionComment - with {@inheritdoc} support
* Apnet.NamingConvensions.ValidVariableName - require camelCase property names
* Squiz.Functions.MultiLineFunctionDeclaration

Getting PHP_CodeSniffer report
------------------------------

Run `phpcs --standard=vendor/apnet/coding-standard/src/Apnet src` to analize code inside `src` directory
