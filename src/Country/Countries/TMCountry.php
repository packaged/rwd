<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class TMCountry implements Country
{
  public function getName()
  {
    return 'Turkmenistan';
  }

  public function getIso2()
  {
    return 'TM';
  }

  public function getIso3()
  {
    return 'TKM';
  }

  public function getWmo()
  {
    return 'TR';
  }

  public function getNumericCode()
  {
    return 795;
  }

  public function getDialPrefix()
  {
    return 993;
  }

  public function getCurrencyCode()
  {
    return 'TMT';
  }
}
