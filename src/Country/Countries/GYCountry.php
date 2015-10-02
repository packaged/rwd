<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GYCountry implements CountryInterface
{
  public function getName()
  {
    return 'Guyana';
  }

  public function getIso2()
  {
    return 'GY';
  }

  public function getIso3()
  {
    return 'GUY';
  }

  public function getWmo()
  {
    return 'GY';
  }

  public function getNumericCode()
  {
    return 328;
  }

  public function getDialPrefix()
  {
    return 592;
  }

  public function getCurrencyCode()
  {
    return 'GYD';
  }
}
