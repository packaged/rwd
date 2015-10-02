<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KNCountry implements CountryInterface
{
  public function getName()
  {
    return 'Saint Kitts and Nevis';
  }

  public function getIso2()
  {
    return 'KN';
  }

  public function getIso3()
  {
    return 'KNA';
  }

  public function getWmo()
  {
    return 'AT';
  }

  public function getNumericCode()
  {
    return 659;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'XCD';
  }
}
