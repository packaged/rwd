<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GQCountry implements CountryInterface
{
  public function getName()
  {
    return 'Equatorial Guinea';
  }

  public function getIso2()
  {
    return 'GQ';
  }

  public function getIso3()
  {
    return 'GNQ';
  }

  public function getWmo()
  {
    return 'GQ';
  }

  public function getNumericCode()
  {
    return 226;
  }

  public function getDialPrefix()
  {
    return 240;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
