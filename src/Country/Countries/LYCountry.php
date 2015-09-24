<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class LYCountry implements Country
{
  public function getName()
  {
    return 'Libya';
  }

  public function getIso2()
  {
    return 'LY';
  }

  public function getIso3()
  {
    return 'LBY';
  }

  public function getWmo()
  {
    return 'LY';
  }

  public function getNumericCode()
  {
    return 434;
  }

  public function getDialPrefix()
  {
    return 218;
  }

  public function getCurrencyCode()
  {
    return 'LYD';
  }
}
