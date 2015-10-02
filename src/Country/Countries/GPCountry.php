<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GPCountry implements CountryInterface
{
  public function getName()
  {
    return 'Guadeloupe';
  }

  public function getIso2()
  {
    return 'GP';
  }

  public function getIso3()
  {
    return 'GLP';
  }

  public function getWmo()
  {
    return 'MF';
  }

  public function getNumericCode()
  {
    return 312;
  }

  public function getDialPrefix()
  {
    return 590;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
