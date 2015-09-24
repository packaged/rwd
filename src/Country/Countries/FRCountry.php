<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class FRCountry implements Country
{
  public function getName()
  {
    return 'France';
  }

  public function getIso2()
  {
    return 'FR';
  }

  public function getIso3()
  {
    return 'FRA';
  }

  public function getWmo()
  {
    return 'FR';
  }

  public function getNumericCode()
  {
    return 250;
  }

  public function getDialPrefix()
  {
    return 33;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
