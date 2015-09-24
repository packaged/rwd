<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BHCountry implements Country
{
  public function getName()
  {
    return 'Bahrain';
  }

  public function getIso2()
  {
    return 'BH';
  }

  public function getIso3()
  {
    return 'BHR';
  }

  public function getWmo()
  {
    return 'BN';
  }

  public function getNumericCode()
  {
    return 48;
  }

  public function getDialPrefix()
  {
    return 973;
  }

  public function getCurrencyCode()
  {
    return 'BHD';
  }
}
