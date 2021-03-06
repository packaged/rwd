<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TJCountry implements CountryInterface
{
  public function getName()
  {
    return 'Tajikistan';
  }

  public function getIso2()
  {
    return 'TJ';
  }

  public function getIso3()
  {
    return 'TJK';
  }

  public function getWmo()
  {
    return 'TA';
  }

  public function getNumericCode()
  {
    return 762;
  }

  public function getDialPrefix()
  {
    return 992;
  }

  public function getCurrencyCode()
  {
    return 'TJS';
  }
}
