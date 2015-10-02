<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class USCountry implements CountryInterface
{
  public function getName()
  {
    return 'United States';
  }

  public function getIso2()
  {
    return 'US';
  }

  public function getIso3()
  {
    return 'USA';
  }

  public function getWmo()
  {
    return 'US';
  }

  public function getNumericCode()
  {
    return 840;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
