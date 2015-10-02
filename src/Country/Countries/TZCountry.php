<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TZCountry implements CountryInterface
{
  public function getName()
  {
    return 'Tanzania, United Republic of';
  }

  public function getIso2()
  {
    return 'TZ';
  }

  public function getIso3()
  {
    return 'TZA';
  }

  public function getWmo()
  {
    return 'TN';
  }

  public function getNumericCode()
  {
    return 834;
  }

  public function getDialPrefix()
  {
    return 255;
  }

  public function getCurrencyCode()
  {
    return 'TZS';
  }
}
