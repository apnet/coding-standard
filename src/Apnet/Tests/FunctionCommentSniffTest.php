<?php

namespace Apnet\Tests;

/**
 * Test `Apnet.Commenting.FunctionComment` Sniff
 */
class FunctionCommentSniffTest extends CodeSnifferTestCase
{

    /**
     * Test `Apnet.Commenting.FunctionComment` Sniff
     *
     * @return null
     */
    public function testSniff()
    {
        $codeSniffer = $this->getCodeSniffer(
            array("Apnet.Commenting.FunctionComment")
        );
        $file = $codeSniffer->processFile(
            dirname(__FILE__) . "/PhpUnit/FunctionCommentSniffClass.php"
        );

        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(2, $file->getErrorCount());

        $errors = $file->getErrors();

        $this->assertTrue(isset($errors[12][5][0]["source"]));
        $this->assertEquals(
            "Apnet.Commenting.FunctionComment.MissingParamTag", $errors[12][5][0]["source"]
        );

        $this->assertTrue(isset($errors[14][6][0]["source"]));
        $this->assertEquals(
            "Apnet.Commenting.FunctionComment.MissingReturn", $errors[14][6][0]["source"]
        );
    }
}
