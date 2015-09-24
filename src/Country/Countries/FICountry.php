<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class FICountry implements Country
{
  public function getName()
  {
    return 'Finland';
  }

  public function getIso2()
  {
    return 'FI';
  }

  public function getIso3()
  {
    return 'FIN';
  }

  public function getWmo()
  {
    return 'FI';
  }

  public function getNumericCode()
  {
    return 246;
  }

  public function getDialPrefix()
  {
    return 358;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
