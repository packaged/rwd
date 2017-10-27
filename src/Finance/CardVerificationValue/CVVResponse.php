<?php
namespace Packaged\Rwd\Finance\CardVerificationValue;

class CVVResponse implements CVVInterface
{
  private $_code = '';
  private $_description = '';

  public function __construct($code, $description)
  {
    $this->_code = strtoupper($code);
    $this->_description = trim($description);
  }

  public function getCode()
  {
    return $this->_code;
  }

  public function getDescription()
  {
    return $this->_description;
  }

  public function isMatch()
  {
    return false;
  }

  public function wasProcessed()
  {
    return false;
  }
}
