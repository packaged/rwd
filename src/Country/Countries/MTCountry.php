<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MTCountry implements CountryInterface
{
  public function getName()
  {
    return 'Malta';
  }

  public function getIso2()
  {
    return 'MT';
  }

  public function getIso3()
  {
    return 'MLT';
  }

  public function getWmo()
  {
    return 'ML';
  }

  public function getNumericCode()
  {
    return 470;
  }

  public function getDialPrefix()
  {
    return 356;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
