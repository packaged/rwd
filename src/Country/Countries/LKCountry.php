<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class LKCountry implements Country
{
  public function getName()
  {
    return 'Sri Lanka';
  }

  public function getIso2()
  {
    return 'LK';
  }

  public function getIso3()
  {
    return 'LKA';
  }

  public function getWmo()
  {
    return 'SB';
  }

  public function getNumericCode()
  {
    return 144;
  }

  public function getDialPrefix()
  {
    return 94;
  }

  public function getCurrencyCode()
  {
    return 'LKR';
  }
}
