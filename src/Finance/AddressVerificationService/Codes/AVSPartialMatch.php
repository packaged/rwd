<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

class AVSPartialMatch extends AVSUsableResponse
{
  protected $_matchStreet;
  protected $_matchPostal;

  public function __construct($code, $description, $matchStreet = false, $matchPostal = false)
  {
    $this->_matchStreet = $matchStreet;
    $this->_matchPostal = $matchPostal;

    parent::__construct($code, $description);
  }

  public function isPartial()
  {
    return true;
  }

  /**
   * @return bool
   */
  public function isStreetMatch()
  {
    return $this->_matchStreet;
  }

  /**
   * @return bool
   */
  public function isPostalMatch()
  {
    return $this->_matchPostal;
  }

}
