<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class KPCountry implements Country
{
  public function getName()
  {
    return 'Korea, Democratic People\'s Republic of';
  }

  public function getIso2()
  {
    return 'KP';
  }

  public function getIso3()
  {
    return 'PRK';
  }

  public function getWmo()
  {
    return 'KR';
  }

  public function getNumericCode()
  {
    return 408;
  }

  public function getDialPrefix()
  {
    return 850;
  }

  public function getCurrencyCode()
  {
    return 'KPW';
  }
}
