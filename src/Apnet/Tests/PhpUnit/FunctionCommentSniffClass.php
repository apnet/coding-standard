<?php

namespace Apnet\Tests\PhpUnit;

class FunctionCommentSniffClass
{

  /**
   * No inheritdoc annotation
   */
  public function methodNoInheritDoc($param)
  {
    return $param;
  }

  /**
   * {@inheritdoc}
   */
  public function methodWithInheritDoc($param)
  {
    return $param;
  }

}
