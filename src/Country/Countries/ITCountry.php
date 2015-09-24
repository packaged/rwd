<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ITCountry implements Country
{
  public function getName()
  {
    return 'Italy';
  }

  public function getIso2()
  {
    return 'IT';
  }

  public function getIso3()
  {
    return 'ITA';
  }

  public function getWmo()
  {
    return 'IY';
  }

  public function getNumericCode()
  {
    return 380;
  }

  public function getDialPrefix()
  {
    return 39;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
