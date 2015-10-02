<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GICountry implements CountryInterface
{
  public function getName()
  {
    return 'Gibraltar';
  }

  public function getIso2()
  {
    return 'GI';
  }

  public function getIso3()
  {
    return 'GIB';
  }

  public function getWmo()
  {
    return 'GI';
  }

  public function getNumericCode()
  {
    return 292;
  }

  public function getDialPrefix()
  {
    return 350;
  }

  public function getCurrencyCode()
  {
    return 'GIP';
  }
}
