<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class CLCountry implements CountryInterface
{
  public function getName()
  {
    return 'Chile';
  }

  public function getIso2()
  {
    return 'CL';
  }

  public function getIso3()
  {
    return 'CHL';
  }

  public function getWmo()
  {
    return 'CH';
  }

  public function getNumericCode()
  {
    return 152;
  }

  public function getDialPrefix()
  {
    return 56;
  }

  public function getCurrencyCode()
  {
    return 'CLP';
  }
}
