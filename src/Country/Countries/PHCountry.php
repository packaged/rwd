<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class PHCountry implements CountryInterface
{
  public function getName()
  {
    return 'Philippines';
  }

  public function getIso2()
  {
    return 'PH';
  }

  public function getIso3()
  {
    return 'PHL';
  }

  public function getWmo()
  {
    return 'PH';
  }

  public function getNumericCode()
  {
    return 608;
  }

  public function getDialPrefix()
  {
    return 63;
  }

  public function getCurrencyCode()
  {
    return 'PHP';
  }
}
