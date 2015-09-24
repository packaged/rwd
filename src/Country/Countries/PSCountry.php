<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class PSCountry implements Country
{
  public function getName()
  {
    return 'Palestine, State of';
  }

  public function getIso2()
  {
    return 'PS';
  }

  public function getIso3()
  {
    return 'PSE';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 275;
  }

  public function getDialPrefix()
  {
    return 970;
  }

  public function getCurrencyCode()
  {
    return '';
  }
}
