<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class UYCountry implements Country
{
  public function getName()
  {
    return 'Uruguay';
  }

  public function getIso2()
  {
    return 'UY';
  }

  public function getIso3()
  {
    return 'URY';
  }

  public function getWmo()
  {
    return 'UY';
  }

  public function getNumericCode()
  {
    return 858;
  }

  public function getDialPrefix()
  {
    return 598;
  }

  public function getCurrencyCode()
  {
    return 'UYU';
  }
}
