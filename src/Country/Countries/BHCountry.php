<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BHCountry implements CountryInterface
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
