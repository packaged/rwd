<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MDCountry implements CountryInterface
{
  public function getName()
  {
    return 'Moldova, Republic of';
  }

  public function getIso2()
  {
    return 'MD';
  }

  public function getIso3()
  {
    return 'MDA';
  }

  public function getWmo()
  {
    return 'RM';
  }

  public function getNumericCode()
  {
    return 498;
  }

  public function getDialPrefix()
  {
    return 373;
  }

  public function getCurrencyCode()
  {
    return 'MDL';
  }
}
