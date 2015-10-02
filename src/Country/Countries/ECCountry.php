<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ECCountry implements CountryInterface
{
  public function getName()
  {
    return 'Ecuador';
  }

  public function getIso2()
  {
    return 'EC';
  }

  public function getIso3()
  {
    return 'ECU';
  }

  public function getWmo()
  {
    return 'EQ';
  }

  public function getNumericCode()
  {
    return 218;
  }

  public function getDialPrefix()
  {
    return 593;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
