<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GHCountry implements CountryInterface
{
  public function getName()
  {
    return 'Ghana';
  }

  public function getIso2()
  {
    return 'GH';
  }

  public function getIso3()
  {
    return 'GHA';
  }

  public function getWmo()
  {
    return 'GH';
  }

  public function getNumericCode()
  {
    return 288;
  }

  public function getDialPrefix()
  {
    return 233;
  }

  public function getCurrencyCode()
  {
    return 'GHS';
  }
}
