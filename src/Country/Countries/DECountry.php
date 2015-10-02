<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class DECountry implements CountryInterface
{
  public function getName()
  {
    return 'Germany';
  }

  public function getIso2()
  {
    return 'DE';
  }

  public function getIso3()
  {
    return 'DEU';
  }

  public function getWmo()
  {
    return 'DL';
  }

  public function getNumericCode()
  {
    return 276;
  }

  public function getDialPrefix()
  {
    return 49;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
