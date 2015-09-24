<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SKCountry implements Country
{
  public function getName()
  {
    return 'Slovakia';
  }

  public function getIso2()
  {
    return 'SK';
  }

  public function getIso3()
  {
    return 'SVK';
  }

  public function getWmo()
  {
    return 'SQ';
  }

  public function getNumericCode()
  {
    return 703;
  }

  public function getDialPrefix()
  {
    return 421;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
