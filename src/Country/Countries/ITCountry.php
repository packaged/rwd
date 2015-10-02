<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ITCountry implements CountryInterface
{
  public function getName()
  {
    return 'Italy';
  }

  public function getIso2()
  {
    return 'IT';
  }

  public function getIso3()
  {
    return 'ITA';
  }

  public function getWmo()
  {
    return 'IY';
  }

  public function getNumericCode()
  {
    return 380;
  }

  public function getDialPrefix()
  {
    return 39;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
