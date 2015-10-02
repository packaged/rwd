<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SRCountry implements CountryInterface
{
  public function getName()
  {
    return 'Suriname';
  }

  public function getIso2()
  {
    return 'SR';
  }

  public function getIso3()
  {
    return 'SUR';
  }

  public function getWmo()
  {
    return 'SM';
  }

  public function getNumericCode()
  {
    return 740;
  }

  public function getDialPrefix()
  {
    return 597;
  }

  public function getCurrencyCode()
  {
    return 'SRD';
  }
}
