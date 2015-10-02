<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class NLCountry implements CountryInterface
{
  public function getName()
  {
    return 'Netherlands';
  }

  public function getIso2()
  {
    return 'NL';
  }

  public function getIso3()
  {
    return 'NLD';
  }

  public function getWmo()
  {
    return 'NL';
  }

  public function getNumericCode()
  {
    return 528;
  }

  public function getDialPrefix()
  {
    return 31;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
