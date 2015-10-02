<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GTCountry implements CountryInterface
{
  public function getName()
  {
    return 'Guatemala';
  }

  public function getIso2()
  {
    return 'GT';
  }

  public function getIso3()
  {
    return 'GTM';
  }

  public function getWmo()
  {
    return 'GU';
  }

  public function getNumericCode()
  {
    return 320;
  }

  public function getDialPrefix()
  {
    return 502;
  }

  public function getCurrencyCode()
  {
    return 'GTQ';
  }
}
