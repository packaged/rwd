<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ROCountry implements Country
{
  public function getName()
  {
    return 'Romania';
  }

  public function getIso2()
  {
    return 'RO';
  }

  public function getIso3()
  {
    return 'ROU';
  }

  public function getWmo()
  {
    return 'RO';
  }

  public function getNumericCode()
  {
    return 642;
  }

  public function getDialPrefix()
  {
    return 40;
  }

  public function getCurrencyCode()
  {
    return 'RON';
  }
}
