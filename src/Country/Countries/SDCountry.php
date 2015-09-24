<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SDCountry implements Country
{
  public function getName()
  {
    return 'Sudan';
  }

  public function getIso2()
  {
    return 'SD';
  }

  public function getIso3()
  {
    return 'SDN';
  }

  public function getWmo()
  {
    return 'SU';
  }

  public function getNumericCode()
  {
    return 729;
  }

  public function getDialPrefix()
  {
    return 249;
  }

  public function getCurrencyCode()
  {
    return 'SDG';
  }
}
