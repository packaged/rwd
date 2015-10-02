<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GFCountry implements CountryInterface
{
  public function getName()
  {
    return 'French Guiana';
  }

  public function getIso2()
  {
    return 'GF';
  }

  public function getIso3()
  {
    return 'GUF';
  }

  public function getWmo()
  {
    return 'FG';
  }

  public function getNumericCode()
  {
    return 254;
  }

  public function getDialPrefix()
  {
    return 594;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
