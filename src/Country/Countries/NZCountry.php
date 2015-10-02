<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class NZCountry implements CountryInterface
{
  public function getName()
  {
    return 'New Zealand';
  }

  public function getIso2()
  {
    return 'NZ';
  }

  public function getIso3()
  {
    return 'NZL';
  }

  public function getWmo()
  {
    return 'NZ';
  }

  public function getNumericCode()
  {
    return 554;
  }

  public function getDialPrefix()
  {
    return 64;
  }

  public function getCurrencyCode()
  {
    return 'NZD';
  }
}
