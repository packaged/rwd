<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MVCountry implements Country
{
  public function getName()
  {
    return 'Maldives';
  }

  public function getIso2()
  {
    return 'MV';
  }

  public function getIso3()
  {
    return 'MDV';
  }

  public function getWmo()
  {
    return 'MV';
  }

  public function getNumericCode()
  {
    return 462;
  }

  public function getDialPrefix()
  {
    return 960;
  }

  public function getCurrencyCode()
  {
    return 'MVR';
  }
}
