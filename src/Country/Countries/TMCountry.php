<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TMCountry implements CountryInterface
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
