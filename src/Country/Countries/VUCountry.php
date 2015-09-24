<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class VUCountry implements Country
{
  public function getName()
  {
    return 'Vanuatu';
  }

  public function getIso2()
  {
    return 'VU';
  }

  public function getIso3()
  {
    return 'VUT';
  }

  public function getWmo()
  {
    return 'NV';
  }

  public function getNumericCode()
  {
    return 548;
  }

  public function getDialPrefix()
  {
    return 678;
  }

  public function getCurrencyCode()
  {
    return 'VUV';
  }
}
