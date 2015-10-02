<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MVCountry implements CountryInterface
{
  public function getName()
  {
    return 'Maldives';
  }

  public function getIso2()
  {
    return 'MV';
  }

  public function getIso3()
  {
    return 'MDV';
  }

  public function getWmo()
  {
    return 'MV';
  }

  public function getNumericCode()
  {
    return 462;
  }

  public function getDialPrefix()
  {
    return 960;
  }

  public function getCurrencyCode()
  {
    return 'MVR';
  }
}
