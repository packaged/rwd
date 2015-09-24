<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class GGCountry implements Country
{
  public function getName()
  {
    return 'Guernsey';
  }

  public function getIso2()
  {
    return 'GG';
  }

  public function getIso3()
  {
    return 'GGY';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 831;
  }

  public function getDialPrefix()
  {
    return 44;
  }

  public function getCurrencyCode()
  {
    return 'GBP';
  }
}
