<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KZCountry implements CountryInterface
{
  public function getName()
  {
    return 'Kazakhstan';
  }

  public function getIso2()
  {
    return 'KZ';
  }

  public function getIso3()
  {
    return 'KAZ';
  }

  public function getWmo()
  {
    return 'KZ';
  }

  public function getNumericCode()
  {
    return 398;
  }

  public function getDialPrefix()
  {
    return 7;
  }

  public function getCurrencyCode()
  {
    return 'KZT';
  }
}
