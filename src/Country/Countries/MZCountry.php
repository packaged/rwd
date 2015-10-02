<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MZCountry implements CountryInterface
{
  public function getName()
  {
    return 'Mozambique';
  }

  public function getIso2()
  {
    return 'MZ';
  }

  public function getIso3()
  {
    return 'MOZ';
  }

  public function getWmo()
  {
    return 'MZ';
  }

  public function getNumericCode()
  {
    return 508;
  }

  public function getDialPrefix()
  {
    return 258;
  }

  public function getCurrencyCode()
  {
    return 'MZN';
  }
}
