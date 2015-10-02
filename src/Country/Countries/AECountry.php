<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class AECountry implements CountryInterface
{
  public function getName()
  {
    return 'United Arab Emirates';
  }

  public function getIso2()
  {
    return 'AE';
  }

  public function getIso3()
  {
    return 'ARE';
  }

  public function getWmo()
  {
    return 'ER';
  }

  public function getNumericCode()
  {
    return 784;
  }

  public function getDialPrefix()
  {
    return 971;
  }

  public function getCurrencyCode()
  {
    return 'AED';
  }
}
