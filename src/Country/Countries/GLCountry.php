<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GLCountry implements CountryInterface
{
  public function getName()
  {
    return 'Greenland';
  }

  public function getIso2()
  {
    return 'GL';
  }

  public function getIso3()
  {
    return 'GRL';
  }

  public function getWmo()
  {
    return 'GL';
  }

  public function getNumericCode()
  {
    return 304;
  }

  public function getDialPrefix()
  {
    return 299;
  }

  public function getCurrencyCode()
  {
    return 'DKK';
  }
}
