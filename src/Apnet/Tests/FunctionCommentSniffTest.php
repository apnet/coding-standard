<?php

namespace Apnet\Tests;

/**
 * Test `Apnet.Commenting` Sniff
 */
class FunctionCommentSniffTest extends \PHPUnit_Framework_TestCase
{

  /**
   * Test `Apnet.Commenting.FunctionComment` Sniff
   *
   * @return null
   */
  public function testSniff()
  {
    $codeSniffer = new \PHP_CodeSniffer();
    $codeSniffer->process(
      array(), __DIR__ . "/..", array("Apnet.Commenting.FunctionComment")
    );
    $codeSniffer->setIgnorePatterns(array());

    $file = $codeSniffer->processFile(
      dirname(__FILE__) . "/PhpUnit/FunctionCommentSniffClass.php"
    );

    $this->assertEquals(0, $file->getWarningCount());
    $this->assertEquals(2, $file->getErrorCount());

    $errors = $file->getErrors();

    $this->assertTrue(isset($errors[12][3][0]["source"]));
    $this->assertEquals(
      "Apnet.Commenting.FunctionComment.MissingParamTag", $errors[12][3][0]["source"]
    );

    $this->assertTrue(isset($errors[14][1][0]["source"]));
    $this->assertEquals(
      "Apnet.Commenting.FunctionComment.MissingReturn", $errors[14][1][0]["source"]
    );
  }
}
