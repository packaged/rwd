<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ROCountry implements CountryInterface
{
  public function getName()
  {
    return 'Romania';
  }

  public function getIso2()
  {
    return 'RO';
  }

  public function getIso3()
  {
    return 'ROU';
  }

  public function getWmo()
  {
    return 'RO';
  }

  public function getNumericCode()
  {
    return 642;
  }

  public function getDialPrefix()
  {
    return 40;
  }

  public function getCurrencyCode()
  {
    return 'RON';
  }
}
