<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class VCCountry implements CountryInterface
{
  public function getName()
  {
    return 'Saint Vincent and the Grenadines';
  }

  public function getIso2()
  {
    return 'VC';
  }

  public function getIso3()
  {
    return 'VCT';
  }

  public function getWmo()
  {
    return 'VG';
  }

  public function getNumericCode()
  {
    return 670;
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
