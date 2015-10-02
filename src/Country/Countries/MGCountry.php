<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MGCountry implements CountryInterface
{
  public function getName()
  {
    return 'Madagascar';
  }

  public function getIso2()
  {
    return 'MG';
  }

  public function getIso3()
  {
    return 'MDG';
  }

  public function getWmo()
  {
    return 'MG';
  }

  public function getNumericCode()
  {
    return 450;
  }

  public function getDialPrefix()
  {
    return 261;
  }

  public function getCurrencyCode()
  {
    return 'MGA';
  }
}
