<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MXCountry implements CountryInterface
{
  public function getName()
  {
    return 'Mexico';
  }

  public function getIso2()
  {
    return 'MX';
  }

  public function getIso3()
  {
    return 'MEX';
  }

  public function getWmo()
  {
    return 'MX';
  }

  public function getNumericCode()
  {
    return 484;
  }

  public function getDialPrefix()
  {
    return 52;
  }

  public function getCurrencyCode()
  {
    return 'MXN';
  }
}
