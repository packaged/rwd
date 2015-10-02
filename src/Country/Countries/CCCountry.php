<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CCCountry implements Country
{
  public function getName()
  {
    return 'Cocos (Keeling) Islands';
  }

  public function getIso2()
  {
    return 'CC';
  }

  public function getIso3()
  {
    return 'CCK';
  }

  public function getWmo()
  {
    return 'KK';
  }

  public function getNumericCode()
  {
    return 166;
  }

  public function getDialPrefix()
  {
    return 61;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
