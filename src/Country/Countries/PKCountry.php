<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class PKCountry implements CountryInterface
{
  public function getName()
  {
    return 'Pakistan';
  }

  public function getIso2()
  {
    return 'PK';
  }

  public function getIso3()
  {
    return 'PAK';
  }

  public function getWmo()
  {
    return 'PK';
  }

  public function getNumericCode()
  {
    return 586;
  }

  public function getDialPrefix()
  {
    return 92;
  }

  public function getCurrencyCode()
  {
    return 'PKR';
  }
}
