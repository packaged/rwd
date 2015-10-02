<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class GSCountry implements Country
{
  public function getName()
  {
    return 'South Georgia and the South Sandwich Islands';
  }

  public function getIso2()
  {
    return 'GS';
  }

  public function getIso3()
  {
    return 'SGS';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 239;
  }

  public function getDialPrefix()
  {
    return 500;
  }

  public function getCurrencyCode()
  {
    return '';
  }
}
