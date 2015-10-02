<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BVCountry implements CountryInterface
{
  public function getName()
  {
    return 'Bouvet Island';
  }

  public function getIso2()
  {
    return 'BV';
  }

  public function getIso3()
  {
    return 'BVT';
  }

  public function getWmo()
  {
    return 'BV';
  }

  public function getNumericCode()
  {
    return 74;
  }

  public function getDialPrefix()
  {
    return 47;
  }

  public function getCurrencyCode()
  {
    return 'NOK';
  }
}
