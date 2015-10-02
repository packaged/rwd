<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BOCountry implements CountryInterface
{
  public function getName()
  {
    return 'Bolivia, Plurinational State of';
  }

  public function getIso2()
  {
    return 'BO';
  }

  public function getIso3()
  {
    return 'BOL';
  }

  public function getWmo()
  {
    return 'BO';
  }

  public function getNumericCode()
  {
    return 68;
  }

  public function getDialPrefix()
  {
    return 591;
  }

  public function getCurrencyCode()
  {
    return 'BOB';
  }
}
