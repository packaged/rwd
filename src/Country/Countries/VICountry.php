<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class VICountry implements CountryInterface
{
  public function getName()
  {
    return 'Virgin Islands, U.S.';
  }

  public function getIso2()
  {
    return 'VI';
  }

  public function getIso3()
  {
    return 'VIR';
  }

  public function getWmo()
  {
    return 'VI';
  }

  public function getNumericCode()
  {
    return 850;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
