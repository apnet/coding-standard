<?php

namespace Apnet\Tests;

/**
 * Test `Apnet.Classes.MultipleClassesOneFile` Sniff
 */
class MultipleClassesOneFileSniffClass extends CodeSnifferTestCase
{

    /**
     * Test `Apnet.Commenting.FunctionComment` Sniff
     *
     * @return null
     */
    public function testSniff()
    {
        $codeSniffer = $this->getCodeSniffer(
            array("Apnet.Classes.MultipleClassesOneFile")
        );
        $file = $codeSniffer->processFile(
            dirname(__FILE__) . "/PhpUnit/MultipleClassesOneFileSniffClass.php"
        );

        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(1, $file->getErrorCount());

        $errors = $file->getErrors();

        $this->assertTrue(isset($errors[11][1][0]["source"]));
        $this->assertEquals(
            "Apnet.Classes.MultipleClassesOneFile", $errors[11][1][0]["source"]
        );
    }
}
