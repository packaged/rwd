<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class YTCountry implements CountryInterface
{
  public function getName()
  {
    return 'Mayotte';
  }

  public function getIso2()
  {
    return 'YT';
  }

  public function getIso3()
  {
    return 'MYT';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 175;
  }

  public function getDialPrefix()
  {
    return 262;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
