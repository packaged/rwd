<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class LVCountry implements Country
{
  public function getName()
  {
    return 'Latvia';
  }

  public function getIso2()
  {
    return 'LV';
  }

  public function getIso3()
  {
    return 'LVA';
  }

  public function getWmo()
  {
    return 'LV';
  }

  public function getNumericCode()
  {
    return 428;
  }

  public function getDialPrefix()
  {
    return 371;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
