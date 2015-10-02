<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class EECountry implements CountryInterface
{
  public function getName()
  {
    return 'Estonia';
  }

  public function getIso2()
  {
    return 'EE';
  }

  public function getIso3()
  {
    return 'EST';
  }

  public function getWmo()
  {
    return 'EO';
  }

  public function getNumericCode()
  {
    return 233;
  }

  public function getDialPrefix()
  {
    return 372;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
