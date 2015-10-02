<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MLCountry implements CountryInterface
{
  public function getName()
  {
    return 'Mali';
  }

  public function getIso2()
  {
    return 'ML';
  }

  public function getIso3()
  {
    return 'MLI';
  }

  public function getWmo()
  {
    return 'MI';
  }

  public function getNumericCode()
  {
    return 466;
  }

  public function getDialPrefix()
  {
    return 223;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
