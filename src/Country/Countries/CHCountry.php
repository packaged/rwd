<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CHCountry implements Country
{
  public function getName()
  {
    return 'Switzerland';
  }

  public function getIso2()
  {
    return 'CH';
  }

  public function getIso3()
  {
    return 'CHE';
  }

  public function getWmo()
  {
    return 'SW';
  }

  public function getNumericCode()
  {
    return 756;
  }

  public function getDialPrefix()
  {
    return 41;
  }

  public function getCurrencyCode()
  {
    return 'CHF';
  }
}
