<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BLCountry implements Country
{
  public function getName()
  {
    return 'Saint Barthélemy';
  }

  public function getIso2()
  {
    return 'BL';
  }

  public function getIso3()
  {
    return 'BLM';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 652;
  }

  public function getDialPrefix()
  {
    return 590;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
