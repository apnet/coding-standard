<?php

namespace Apnet\Tests;

/**
 * Test `Apnet.NamingConventions` Sniff
 */
class ValidVariableNameSniffTest extends CodeSnifferTestCase
{

  /**
   * Test `Apnet.NamingConventions.ValidVariableName` Sniff
   *
   * @return null
   */
  public function testSniff()
  {
    $codeSniffer = $this->getCodeSniffer(
      array("Apnet.NamingConvensions.ValidVariableName")
    );
    $file = $codeSniffer->processFile(
      dirname(__FILE__) . "/PhpUnit/FunctionCommentSniffClass.php"
    );

    $this->assertEquals(1, $file->getWarningCount());
    $this->assertEquals(1, $file->getErrorCount());

    $warnings = $file->getWarnings();
    $errors = $file->getErrors();

    $this->assertTrue(isset($warnings[10][11][0]["source"]));
    $this->assertEquals(
      "Apnet.NamingConvensions.ValidVariableName.MemberVarContainsNumbers", $warnings[10][11][0]["source"]
    );

    $this->assertTrue(isset($errors[8][11][0]["source"]));
    $this->assertEquals(
      "Apnet.NamingConvensions.ValidVariableName.NotCamelCaps", $errors[8][11][0]["source"]
    );
  }
}
