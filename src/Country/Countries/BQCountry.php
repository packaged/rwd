<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BQCountry implements Country
{
  public function getName()
  {
    return 'Bonaire, Sint Eustatius and Saba';
  }

  public function getIso2()
  {
    return 'BQ';
  }

  public function getIso3()
  {
    return 'BES';
  }

  public function getWmo()
  {
    return 'NU';
  }

  public function getNumericCode()
  {
    return 535;
  }

  public function getDialPrefix()
  {
    return 599;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
