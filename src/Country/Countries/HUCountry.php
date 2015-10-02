<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class HUCountry implements CountryInterface
{
  public function getName()
  {
    return 'Hungary';
  }

  public function getIso2()
  {
    return 'HU';
  }

  public function getIso3()
  {
    return 'HUN';
  }

  public function getWmo()
  {
    return 'HU';
  }

  public function getNumericCode()
  {
    return 348;
  }

  public function getDialPrefix()
  {
    return 36;
  }

  public function getCurrencyCode()
  {
    return 'HUF';
  }
}
