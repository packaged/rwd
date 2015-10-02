<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class FJCountry implements CountryInterface
{
  public function getName()
  {
    return 'Fiji';
  }

  public function getIso2()
  {
    return 'FJ';
  }

  public function getIso3()
  {
    return 'FJI';
  }

  public function getWmo()
  {
    return 'FJ';
  }

  public function getNumericCode()
  {
    return 242;
  }

  public function getDialPrefix()
  {
    return 679;
  }

  public function getCurrencyCode()
  {
    return 'FJD';
  }
}
