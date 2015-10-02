<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Comoros';
  }

  public function getIso2()
  {
    return 'KM';
  }

  public function getIso3()
  {
    return 'COM';
  }

  public function getWmo()
  {
    return 'IC';
  }

  public function getNumericCode()
  {
    return 174;
  }

  public function getDialPrefix()
  {
    return 269;
  }

  public function getCurrencyCode()
  {
    return 'KMF';
  }
}
