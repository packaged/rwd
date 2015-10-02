<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class THCountry implements CountryInterface
{
  public function getName()
  {
    return 'Thailand';
  }

  public function getIso2()
  {
    return 'TH';
  }

  public function getIso3()
  {
    return 'THA';
  }

  public function getWmo()
  {
    return 'TH';
  }

  public function getNumericCode()
  {
    return 764;
  }

  public function getDialPrefix()
  {
    return 66;
  }

  public function getCurrencyCode()
  {
    return 'THB';
  }
}
