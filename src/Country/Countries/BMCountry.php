<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Bermuda';
  }

  public function getIso2()
  {
    return 'BM';
  }

  public function getIso3()
  {
    return 'BMU';
  }

  public function getWmo()
  {
    return 'BE';
  }

  public function getNumericCode()
  {
    return 60;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'BMD';
  }
}
