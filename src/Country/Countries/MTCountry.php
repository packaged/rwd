<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MTCountry implements Country
{
  public function getName()
  {
    return 'Malta';
  }

  public function getIso2()
  {
    return 'MT';
  }

  public function getIso3()
  {
    return 'MLT';
  }

  public function getWmo()
  {
    return 'ML';
  }

  public function getNumericCode()
  {
    return 470;
  }

  public function getDialPrefix()
  {
    return 356;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
