<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class HTCountry implements CountryInterface
{
  public function getName()
  {
    return 'Haiti';
  }

  public function getIso2()
  {
    return 'HT';
  }

  public function getIso3()
  {
    return 'HTI';
  }

  public function getWmo()
  {
    return 'HA';
  }

  public function getNumericCode()
  {
    return 332;
  }

  public function getDialPrefix()
  {
    return 509;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
