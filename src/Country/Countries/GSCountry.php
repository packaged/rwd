<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GSCountry implements CountryInterface
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
