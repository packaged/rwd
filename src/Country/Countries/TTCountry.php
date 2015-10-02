<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TTCountry implements CountryInterface
{
  public function getName()
  {
    return 'Trinidad and Tobago';
  }

  public function getIso2()
  {
    return 'TT';
  }

  public function getIso3()
  {
    return 'TTO';
  }

  public function getWmo()
  {
    return 'TD';
  }

  public function getNumericCode()
  {
    return 780;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'TTD';
  }
}
