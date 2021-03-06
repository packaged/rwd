<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class UACountry implements CountryInterface
{
  public function getName()
  {
    return 'Ukraine';
  }

  public function getIso2()
  {
    return 'UA';
  }

  public function getIso3()
  {
    return 'UKR';
  }

  public function getWmo()
  {
    return 'UR';
  }

  public function getNumericCode()
  {
    return 804;
  }

  public function getDialPrefix()
  {
    return 380;
  }

  public function getCurrencyCode()
  {
    return 'UAH';
  }
}
