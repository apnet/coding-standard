<?php

// @codingStandardsIgnoreStart
class Apnet_Sniffs_NamingConvensions_ValidVariableNameSniff extends PHP_CodeSniffer_Standards_AbstractVariableSniff
// @codingStandardsIgnoreEnd
{

    /**
     * {@inheritdoc}
     */
    protected function processMemberVar(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens  = $phpcsFile->getTokens();
        $varName = ltrim($tokens[$stackPtr]['content'], '$');

        if (PHP_CodeSniffer::isCamelCaps($varName, false, true, false) === false) {
            $error = 'Variable "%s" is not in valid camel caps format';
            $data  = array($varName);
            $phpcsFile->addError($error, $stackPtr, 'NotCamelCaps', $data);
        } elseif (preg_match('|\d|', $varName)) {
            $warning = 'Variable "%s" contains numbers but this is discouraged';
            $data    = array($varName);
            $phpcsFile->addWarning($warning, $stackPtr, 'MemberVarContainsNumbers', $data);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processVariable(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        // We don't care about normal variables.
    }

    /**
     * {@inheritdoc}
     */
    protected function processVariableInString(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        // We don't care about normal variables.
    }
}
