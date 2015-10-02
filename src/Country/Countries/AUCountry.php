<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class AUCountry implements CountryInterface
{
  public function getName()
  {
    return 'Australia';
  }

  public function getIso2()
  {
    return 'AU';
  }

  public function getIso3()
  {
    return 'AUS';
  }

  public function getWmo()
  {
    return 'AU';
  }

  public function getNumericCode()
  {
    return 36;
  }

  public function getDialPrefix()
  {
    return 61;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
