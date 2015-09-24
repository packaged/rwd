<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class TWCountry implements Country
{
  public function getName()
  {
    return 'Taiwan, Province of China';
  }

  public function getIso2()
  {
    return 'TW';
  }

  public function getIso3()
  {
    return 'TWN';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 158;
  }

  public function getDialPrefix()
  {
    return 886;
  }

  public function getCurrencyCode()
  {
    return 'TWD';
  }
}
