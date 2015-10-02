<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class NRCountry implements CountryInterface
{
  public function getName()
  {
    return 'Nauru';
  }

  public function getIso2()
  {
    return 'NR';
  }

  public function getIso3()
  {
    return 'NRU';
  }

  public function getWmo()
  {
    return 'NW';
  }

  public function getNumericCode()
  {
    return 520;
  }

  public function getDialPrefix()
  {
    return 674;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
