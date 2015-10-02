<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class CNCountry implements CountryInterface
{
  public function getName()
  {
    return 'China';
  }

  public function getIso2()
  {
    return 'CN';
  }

  public function getIso3()
  {
    return 'CHN';
  }

  public function getWmo()
  {
    return 'CI';
  }

  public function getNumericCode()
  {
    return 156;
  }

  public function getDialPrefix()
  {
    return 86;
  }

  public function getCurrencyCode()
  {
    return 'CNY';
  }
}
