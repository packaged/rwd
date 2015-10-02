<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KHCountry implements CountryInterface
{
  public function getName()
  {
    return 'Cambodia';
  }

  public function getIso2()
  {
    return 'KH';
  }

  public function getIso3()
  {
    return 'KHM';
  }

  public function getWmo()
  {
    return 'KP';
  }

  public function getNumericCode()
  {
    return 116;
  }

  public function getDialPrefix()
  {
    return 855;
  }

  public function getCurrencyCode()
  {
    return 'KHR';
  }
}
