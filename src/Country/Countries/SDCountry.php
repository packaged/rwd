<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SDCountry implements CountryInterface
{
  public function getName()
  {
    return 'Sudan';
  }

  public function getIso2()
  {
    return 'SD';
  }

  public function getIso3()
  {
    return 'SDN';
  }

  public function getWmo()
  {
    return 'SU';
  }

  public function getNumericCode()
  {
    return 729;
  }

  public function getDialPrefix()
  {
    return 249;
  }

  public function getCurrencyCode()
  {
    return 'SDG';
  }
}
