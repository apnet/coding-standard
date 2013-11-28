<?php

use PEAR_Sniffs_Commenting_FunctionCommentSniff as BaseSniff;

class Apnet_Sniffs_Commenting_FunctionCommentSniff extends BaseSniff
{

  /**
   * {@inheritdoc}
   */
  protected function processReturn($commentStart, $commentEnd)
  {
    if ($this->isInheritDoc()) {
      return;
    }

    parent::processReturn($commentStart, $commentEnd);
  }

  /**
   * {@inheritdoc}
   */
  protected function processParams($commentStart)
  {
    if ($this->isInheritDoc()) {
      return;
    }

    parent::processParams($commentStart);
  }

  /**
   * Is the comment an inheritdoc?
   *
   * @return boolean
   * @see https://github.com/opensky/Symfony2-coding-standard/
   */
  protected function isInheritDoc()
  {
    $commentParser = $this->commentParser;
    /* @var $commentParser PHP_CodeSniffer_CommentParser_FunctionCommentParser */
    $comment = $commentParser->getComment();
    /* @var $comment PHP_CodeSniffer_CommentParser_CommentElement */
    $content = $comment->getContent();

    return preg_match('#{@inheritdoc}#i', $content) === 1;
  }

}