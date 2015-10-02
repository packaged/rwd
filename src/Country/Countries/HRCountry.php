<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class HRCountry implements Country
{
  public function getName()
  {
    return 'Croatia';
  }

  public function getIso2()
  {
    return 'HR';
  }

  public function getIso3()
  {
    return 'HRV';
  }

  public function getWmo()
  {
    return 'RH';
  }

  public function getNumericCode()
  {
    return 191;
  }

  public function getDialPrefix()
  {
    return 385;
  }

  public function getCurrencyCode()
  {
    return 'HRK';
  }
}
