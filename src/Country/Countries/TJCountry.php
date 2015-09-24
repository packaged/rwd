<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class TJCountry implements Country
{
  public function getName()
  {
    return 'Tajikistan';
  }

  public function getIso2()
  {
    return 'TJ';
  }

  public function getIso3()
  {
    return 'TJK';
  }

  public function getWmo()
  {
    return 'TA';
  }

  public function getNumericCode()
  {
    return 762;
  }

  public function getDialPrefix()
  {
    return 992;
  }

  public function getCurrencyCode()
  {
    return 'TJS';
  }
}
