<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class PLCountry implements Country
{
  public function getName()
  {
    return 'Poland';
  }

  public function getIso2()
  {
    return 'PL';
  }

  public function getIso3()
  {
    return 'POL';
  }

  public function getWmo()
  {
    return 'PL';
  }

  public function getNumericCode()
  {
    return 616;
  }

  public function getDialPrefix()
  {
    return 48;
  }

  public function getCurrencyCode()
  {
    return 'PLN';
  }
}
