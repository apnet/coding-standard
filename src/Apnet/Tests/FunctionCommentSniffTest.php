<?php

namespace Apnet\Tests;

class FunctionCommentSniffTest extends \PHPUnit_Framework_TestCase
{

  /**
   * Test Apnet Commenting_FunctionComment Sniff
   *
   * @return null
   */
  public function testSniff()
  {
    $codeSniffer = new \PHP_CodeSniffer();
    $codeSniffer->process(
      array(), __DIR__ . "/..", array("Apnet_Sniffs_Commenting_FunctionCommentSniff")
    );
    $codeSniffer->setIgnorePatterns(array());

    $codeSniffer->processFile(
      dirname(__FILE__) . "/FunctionCommentSniffClass.php"
    );
    $files = $codeSniffer->getFiles();

    $file = array_pop($files);
    /* @var $file \PHP_CodeSniffer_File */

    $this->assertEquals(0, $file->getWarningCount());
    $this->assertEquals(2, $file->getErrorCount());

    $errors = $file->getErrors();

    $this->assertTrue(isset($errors[8][3][0]["source"]));
    $this->assertEquals("Apnet.Commenting.FunctionComment.MissingParamTag", $errors[8][3][0]["source"]);

    $this->assertTrue(isset($errors[10][1][0]["source"]));
    $this->assertEquals("Apnet.Commenting.FunctionComment.MissingReturn", $errors[10][1][0]["source"]);
  }

}
