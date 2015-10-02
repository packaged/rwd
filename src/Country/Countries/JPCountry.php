<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class JPCountry implements CountryInterface
{
  public function getName()
  {
    return 'Japan';
  }

  public function getIso2()
  {
    return 'JP';
  }

  public function getIso3()
  {
    return 'JPN';
  }

  public function getWmo()
  {
    return 'JP';
  }

  public function getNumericCode()
  {
    return 392;
  }

  public function getDialPrefix()
  {
    return 81;
  }

  public function getCurrencyCode()
  {
    return 'JPY';
  }
}
