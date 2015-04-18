<?php

namespace Apnet\Tests;

/**
 * Abstract CodeSniffer TestCase
 */
abstract class CodeSnifferTestCase extends \PHPUnit_Framework_TestCase
{

  /**
   * Create PHP_CodeSniffer instance
   *
   * @param array $restrictions Restrictions
   *
   * @return \PHP_CodeSniffer
   */
  protected function getCodeSniffer(array $restrictions)
  {
    $codeSniffer = new \PHP_CodeSniffer();
    $codeSniffer->cli->setCommandLineValues(
      array("--report=summary")
    );

    $infoReporting = $codeSniffer->reporting->factory("summary");
    /** @var \PHP_CodeSniffer_Reports_Info $infoReporting */
    $infoReporting->recordErrors = true;

    $codeSniffer->process(array(), __DIR__ . "/..", $restrictions);
    $codeSniffer->setIgnorePatterns(array());

    return $codeSniffer;
  }
}
