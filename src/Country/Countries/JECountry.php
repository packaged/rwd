<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class JECountry implements CountryInterface
{
  public function getName()
  {
    return 'Jersey';
  }

  public function getIso2()
  {
    return 'JE';
  }

  public function getIso3()
  {
    return 'JEY';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 832;
  }

  public function getDialPrefix()
  {
    return 44;
  }

  public function getCurrencyCode()
  {
    return 'GBP';
  }
}
