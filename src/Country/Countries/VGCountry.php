<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class VGCountry implements CountryInterface
{
  public function getName()
  {
    return 'Virgin Islands, British';
  }

  public function getIso2()
  {
    return 'VG';
  }

  public function getIso3()
  {
    return 'VGB';
  }

  public function getWmo()
  {
    return 'VI';
  }

  public function getNumericCode()
  {
    return 92;
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
