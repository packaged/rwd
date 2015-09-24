<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class HKCountry implements Country
{
  public function getName()
  {
    return 'Hong Kong';
  }

  public function getIso2()
  {
    return 'HK';
  }

  public function getIso3()
  {
    return 'HKG';
  }

  public function getWmo()
  {
    return 'HK';
  }

  public function getNumericCode()
  {
    return 344;
  }

  public function getDialPrefix()
  {
    return 852;
  }

  public function getCurrencyCode()
  {
    return 'HKD';
  }
}
