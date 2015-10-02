<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GRCountry implements CountryInterface
{
  public function getName()
  {
    return 'Greece';
  }

  public function getIso2()
  {
    return 'GR';
  }

  public function getIso3()
  {
    return 'GRC';
  }

  public function getWmo()
  {
    return 'GR';
  }

  public function getNumericCode()
  {
    return 300;
  }

  public function getDialPrefix()
  {
    return 30;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
