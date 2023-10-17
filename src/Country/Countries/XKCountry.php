<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class XKCountry implements CountryInterface
{
  public function getName()
  {
    return 'Kosovo';
  }

  public function getIso2()
  {
    return 'XK';
  }

  public function getIso3()
  {
    return 'XKX';
  }

  public function getWmo()
  {
    return 'XK';
  }

  public function getNumericCode()
  {
    return 688; // same as Serbia temporarily
  }

  public function getDialPrefix()
  {
    return 383;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
