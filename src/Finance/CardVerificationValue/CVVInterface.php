<?php
namespace Packaged\Rwd\Finance\CardVerificationValue;

interface CVVInterface
{
  public function getCode();

  public function getDescription();

  public function isMatch();

  public function wasProcessed();
}
