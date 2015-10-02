<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ESCountry implements CountryInterface
{
  public function getName()
  {
    return 'Spain';
  }

  public function getIso2()
  {
    return 'ES';
  }

  public function getIso3()
  {
    return 'ESP';
  }

  public function getWmo()
  {
    return 'SP';
  }

  public function getNumericCode()
  {
    return 724;
  }

  public function getDialPrefix()
  {
    return 34;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
