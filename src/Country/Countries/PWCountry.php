<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class PWCountry implements CountryInterface
{
  public function getName()
  {
    return 'Palau';
  }

  public function getIso2()
  {
    return 'PW';
  }

  public function getIso3()
  {
    return 'PLW';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 585;
  }

  public function getDialPrefix()
  {
    return 680;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
