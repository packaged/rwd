<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SSCountry implements CountryInterface
{
  public function getName()
  {
    return 'South Sudan';
  }

  public function getIso2()
  {
    return 'SS';
  }

  public function getIso3()
  {
    return 'SSD';
  }

  public function getWmo()
  {
    return '';
  }

  public function getNumericCode()
  {
    return 728;
  }

  public function getDialPrefix()
  {
    return 211;
  }

  public function getCurrencyCode()
  {
    return 'SSP';
  }
}
