<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class UGCountry implements CountryInterface
{
  public function getName()
  {
    return 'Uganda';
  }

  public function getIso2()
  {
    return 'UG';
  }

  public function getIso3()
  {
    return 'UGA';
  }

  public function getWmo()
  {
    return 'UG';
  }

  public function getNumericCode()
  {
    return 800;
  }

  public function getDialPrefix()
  {
    return 256;
  }

  public function getCurrencyCode()
  {
    return 'UGX';
  }
}
