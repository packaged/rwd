<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ZACountry implements CountryInterface
{
  public function getName()
  {
    return 'South Africa';
  }

  public function getIso2()
  {
    return 'ZA';
  }

  public function getIso3()
  {
    return 'ZAF';
  }

  public function getWmo()
  {
    return 'ZA';
  }

  public function getNumericCode()
  {
    return 710;
  }

  public function getDialPrefix()
  {
    return 27;
  }

  public function getCurrencyCode()
  {
    return 'ZAR';
  }
}
