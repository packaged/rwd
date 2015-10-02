<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class CGCountry implements CountryInterface
{
  public function getName()
  {
    return 'Congo';
  }

  public function getIso2()
  {
    return 'CG';
  }

  public function getIso3()
  {
    return 'COG';
  }

  public function getWmo()
  {
    return 'CG';
  }

  public function getNumericCode()
  {
    return 178;
  }

  public function getDialPrefix()
  {
    return 242;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
