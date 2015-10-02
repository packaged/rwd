<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class UMCountry implements CountryInterface
{
  public function getName()
  {
    return 'United States Minor Outlying Islands';
  }

  public function getIso2()
  {
    return 'UM';
  }

  public function getIso3()
  {
    return 'UMI';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 581;
  }

  public function getDialPrefix()
  {
    return 0;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
