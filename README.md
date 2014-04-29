Apnet PHP coding standard
=========================

PSR-2 coding standard with two-spaces indent

Installation
------------

Add requirements to composer.json:

``` json
{
  "require-dev" : {
    "apnet/coding-standard" : "~1.5,<2.0"
  }
}
```

Sniffs
------

* PSR2
* PEAR.Commenting.InlineComment
* Apnet.Commenting.FunctionComment - {@inheritdoc} support
* Apnet.NamingConvensions.ValidVariableName - require camelCase property names

Sniffs with 2-spaces indent
---------------------------

* Generic.WhiteSpace.ScopeIndent
* PEAR.ControlStructures.MultiLineCondition
* PEAR.WhiteSpace.ObjectOperatorIndent
* PSR2.Classes.ClassDeclaration
* PSR2.ControlStructures.SwitchDeclaration
* PSR2.Methods.FunctionCallSignature
* Squiz.Functions.MultiLineFunctionDeclaration

Getting PHP_CodeSniffer report
------------------------------

Run `phpcs --standard=vendor/apnet/coding-standard/src/Apnet src` to analize code inside `src` directory
