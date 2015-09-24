<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class UZCountry implements Country
{
  public function getName()
  {
    return 'Uzbekistan';
  }

  public function getIso2()
  {
    return 'UZ';
  }

  public function getIso3()
  {
    return 'UZB';
  }

  public function getWmo()
  {
    return 'UZ';
  }

  public function getNumericCode()
  {
    return 860;
  }

  public function getDialPrefix()
  {
    return 998;
  }

  public function getCurrencyCode()
  {
    return 'UZS';
  }
}
