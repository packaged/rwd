<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class RUCountry implements Country
{
  public function getName()
  {
    return 'Russian Federation';
  }

  public function getIso2()
  {
    return 'RU';
  }

  public function getIso3()
  {
    return 'RUS';
  }

  public function getWmo()
  {
    return 'RS';
  }

  public function getNumericCode()
  {
    return 643;
  }

  public function getDialPrefix()
  {
    return 7;
  }

  public function getCurrencyCode()
  {
    return 'RUB';
  }
}
