<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TRCountry implements CountryInterface
{
  public function getName()
  {
    return 'Turkey';
  }

  public function getIso2()
  {
    return 'TR';
  }

  public function getIso3()
  {
    return 'TUR';
  }

  public function getWmo()
  {
    return 'TU';
  }

  public function getNumericCode()
  {
    return 792;
  }

  public function getDialPrefix()
  {
    return 90;
  }

  public function getCurrencyCode()
  {
    return 'TRY';
  }
}
