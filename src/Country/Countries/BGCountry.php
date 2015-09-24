<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BGCountry implements Country
{
  public function getName()
  {
    return 'Bulgaria';
  }

  public function getIso2()
  {
    return 'BG';
  }

  public function getIso3()
  {
    return 'BGR';
  }

  public function getWmo()
  {
    return 'BU';
  }

  public function getNumericCode()
  {
    return 100;
  }

  public function getDialPrefix()
  {
    return 359;
  }

  public function getCurrencyCode()
  {
    return 'BGN';
  }
}
