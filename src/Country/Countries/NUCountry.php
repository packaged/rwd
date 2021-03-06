<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class NUCountry implements CountryInterface
{
  public function getName()
  {
    return 'Niue';
  }

  public function getIso2()
  {
    return 'NU';
  }

  public function getIso3()
  {
    return 'NIU';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 570;
  }

  public function getDialPrefix()
  {
    return 683;
  }

  public function getCurrencyCode()
  {
    return 'NZD';
  }
}
