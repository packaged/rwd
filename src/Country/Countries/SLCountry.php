<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SLCountry implements CountryInterface
{
  public function getName()
  {
    return 'Sierra Leone';
  }

  public function getIso2()
  {
    return 'SL';
  }

  public function getIso3()
  {
    return 'SLE';
  }

  public function getWmo()
  {
    return 'SL';
  }

  public function getNumericCode()
  {
    return 694;
  }

  public function getDialPrefix()
  {
    return 232;
  }

  public function getCurrencyCode()
  {
    return 'SLL';
  }
}
