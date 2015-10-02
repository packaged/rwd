<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class GUCountry implements Country
{
  public function getName()
  {
    return 'Guam';
  }

  public function getIso2()
  {
    return 'GU';
  }

  public function getIso3()
  {
    return 'GUM';
  }

  public function getWmo()
  {
    return 'GM';
  }

  public function getNumericCode()
  {
    return 316;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
