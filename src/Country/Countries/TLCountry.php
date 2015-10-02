<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TLCountry implements CountryInterface
{
  public function getName()
  {
    return 'Timor-Leste';
  }

  public function getIso2()
  {
    return 'TL';
  }

  public function getIso3()
  {
    return 'TLS';
  }

  public function getWmo()
  {
    return 'TM';
  }

  public function getNumericCode()
  {
    return 626;
  }

  public function getDialPrefix()
  {
    return 670;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
