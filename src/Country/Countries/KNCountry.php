<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class KNCountry implements Country
{
  public function getName()
  {
    return 'Saint Kitts and Nevis';
  }

  public function getIso2()
  {
    return 'KN';
  }

  public function getIso3()
  {
    return 'KNA';
  }

  public function getWmo()
  {
    return 'AT';
  }

  public function getNumericCode()
  {
    return 659;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'XCD';
  }
}
