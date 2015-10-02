<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class AFCountry implements CountryInterface
{
  public function getName()
  {
    return 'Afghanistan';
  }

  public function getIso2()
  {
    return 'AF';
  }

  public function getIso3()
  {
    return 'AFG';
  }

  public function getWmo()
  {
    return 'AF';
  }

  public function getNumericCode()
  {
    return 4;
  }

  public function getDialPrefix()
  {
    return 93;
  }

  public function getCurrencyCode()
  {
    return 'AFN';
  }
}
