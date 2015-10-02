<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class IOCountry implements CountryInterface
{
  public function getName()
  {
    return 'British Indian Ocean Territory';
  }

  public function getIso2()
  {
    return 'IO';
  }

  public function getIso3()
  {
    return 'IOT';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 86;
  }

  public function getDialPrefix()
  {
    return 246;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
