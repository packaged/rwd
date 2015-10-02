<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class DOCountry implements CountryInterface
{
  public function getName()
  {
    return 'Dominican Republic';
  }

  public function getIso2()
  {
    return 'DO';
  }

  public function getIso3()
  {
    return 'DOM';
  }

  public function getWmo()
  {
    return 'DR';
  }

  public function getNumericCode()
  {
    return 214;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'DOP';
  }
}
