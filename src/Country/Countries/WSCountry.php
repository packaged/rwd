<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class WSCountry implements Country
{
  public function getName()
  {
    return 'Samoa';
  }

  public function getIso2()
  {
    return 'WS';
  }

  public function getIso3()
  {
    return 'WSM';
  }

  public function getWmo()
  {
    return 'ZM';
  }

  public function getNumericCode()
  {
    return 882;
  }

  public function getDialPrefix()
  {
    return 685;
  }

  public function getCurrencyCode()
  {
    return 'WST';
  }
}
