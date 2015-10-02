<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BECountry implements CountryInterface
{
  public function getName()
  {
    return 'Belgium';
  }

  public function getIso2()
  {
    return 'BE';
  }

  public function getIso3()
  {
    return 'BEL';
  }

  public function getWmo()
  {
    return 'BX';
  }

  public function getNumericCode()
  {
    return 56;
  }

  public function getDialPrefix()
  {
    return 32;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
