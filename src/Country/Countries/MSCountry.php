<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MSCountry implements CountryInterface
{
  public function getName()
  {
    return 'Montserrat';
  }

  public function getIso2()
  {
    return 'MS';
  }

  public function getIso3()
  {
    return 'MSR';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 500;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'XCD';
  }
}
