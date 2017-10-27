<?php
namespace Packaged\Rwd\Finance\AddressVerificationService;

class AVSResponse implements AVSInterface
{
  private $_code = '';
  private $_description = '';

  public function __construct($code, $description)
  {
    $this->_code = $code;
    $this->_description = $description;
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

  public function isPartial()
  {
    return false;
  }

  public function isAvailable()
  {
    return false;
  }

  public function isSupported()
  {
    return false;
  }

  public function isInternational()
  {
    return false;
  }

  public function isValid()
  {
    return true;
  }
}
