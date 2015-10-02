<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GNCountry implements CountryInterface
{
  public function getName()
  {
    return 'Guinea';
  }

  public function getIso2()
  {
    return 'GN';
  }

  public function getIso3()
  {
    return 'GIN';
  }

  public function getWmo()
  {
    return 'GN';
  }

  public function getNumericCode()
  {
    return 324;
  }

  public function getDialPrefix()
  {
    return 224;
  }

  public function getCurrencyCode()
  {
    return 'GNF';
  }
}
