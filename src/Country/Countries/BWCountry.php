<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BWCountry implements CountryInterface
{
  public function getName()
  {
    return 'Botswana';
  }

  public function getIso2()
  {
    return 'BW';
  }

  public function getIso3()
  {
    return 'BWA';
  }

  public function getWmo()
  {
    return 'BC';
  }

  public function getNumericCode()
  {
    return 72;
  }

  public function getDialPrefix()
  {
    return 267;
  }

  public function getCurrencyCode()
  {
    return 'BWP';
  }
}
