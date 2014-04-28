<?php

namespace Apnet\Tests\PhpUnit;

class FunctionCommentSniffClass
{

  private $_variableOne = 0;

  private $variable2 = 0;

  /**
   * No inheritdoc annotation
   */
  public function methodNoInheritDoc($param)
  {
    return $param + $this->_variableOne;
  }

  /**
   * {@inheritdoc}
   */
  public function methodWithInheritDoc($param)
  {
    return $param + $this->variable2;
  }
}
