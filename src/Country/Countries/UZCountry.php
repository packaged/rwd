<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class UZCountry implements CountryInterface
{
  public function getName()
  {
    return 'Uzbekistan';
  }

  public function getIso2()
  {
    return 'UZ';
  }

  public function getIso3()
  {
    return 'UZB';
  }

  public function getWmo()
  {
    return 'UZ';
  }

  public function getNumericCode()
  {
    return 860;
  }

  public function getDialPrefix()
  {
    return 998;
  }

  public function getCurrencyCode()
  {
    return 'UZS';
  }
}
