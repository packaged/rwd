<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SKCountry implements CountryInterface
{
  public function getName()
  {
    return 'Slovakia';
  }

  public function getIso2()
  {
    return 'SK';
  }

  public function getIso3()
  {
    return 'SVK';
  }

  public function getWmo()
  {
    return 'SQ';
  }

  public function getNumericCode()
  {
    return 703;
  }

  public function getDialPrefix()
  {
    return 421;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
