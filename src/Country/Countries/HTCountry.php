<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class HTCountry implements Country
{
  public function getName()
  {
    return 'Haiti';
  }

  public function getIso2()
  {
    return 'HT';
  }

  public function getIso3()
  {
    return 'HTI';
  }

  public function getWmo()
  {
    return 'HA';
  }

  public function getNumericCode()
  {
    return 332;
  }

  public function getDialPrefix()
  {
    return 509;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
