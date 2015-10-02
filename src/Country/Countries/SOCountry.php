<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SOCountry implements CountryInterface
{
  public function getName()
  {
    return 'Somalia';
  }

  public function getIso2()
  {
    return 'SO';
  }

  public function getIso3()
  {
    return 'SOM';
  }

  public function getWmo()
  {
    return 'SI';
  }

  public function getNumericCode()
  {
    return 706;
  }

  public function getDialPrefix()
  {
    return 252;
  }

  public function getCurrencyCode()
  {
    return 'SOS';
  }
}
