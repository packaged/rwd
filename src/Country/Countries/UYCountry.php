<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class UYCountry implements CountryInterface
{
  public function getName()
  {
    return 'Uruguay';
  }

  public function getIso2()
  {
    return 'UY';
  }

  public function getIso3()
  {
    return 'URY';
  }

  public function getWmo()
  {
    return 'UY';
  }

  public function getNumericCode()
  {
    return 858;
  }

  public function getDialPrefix()
  {
    return 598;
  }

  public function getCurrencyCode()
  {
    return 'UYU';
  }
}
