<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class TCCountry implements Country
{
  public function getName()
  {
    return 'Turks and Caicos Islands';
  }

  public function getIso2()
  {
    return 'TC';
  }

  public function getIso3()
  {
    return 'TCA';
  }

  public function getWmo()
  {
    return 'TI';
  }

  public function getNumericCode()
  {
    return 796;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
