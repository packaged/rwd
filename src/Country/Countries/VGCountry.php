<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class VGCountry implements Country
{
  public function getName()
  {
    return 'Virgin Islands, British';
  }

  public function getIso2()
  {
    return 'VG';
  }

  public function getIso3()
  {
    return 'VGB';
  }

  public function getWmo()
  {
    return 'VI';
  }

  public function getNumericCode()
  {
    return 92;
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
