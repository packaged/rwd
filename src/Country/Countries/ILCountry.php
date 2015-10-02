<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ILCountry implements CountryInterface
{
  public function getName()
  {
    return 'Israel';
  }

  public function getIso2()
  {
    return 'IL';
  }

  public function getIso3()
  {
    return 'ISR';
  }

  public function getWmo()
  {
    return 'IS';
  }

  public function getNumericCode()
  {
    return 376;
  }

  public function getDialPrefix()
  {
    return 972;
  }

  public function getCurrencyCode()
  {
    return 'ILS';
  }
}
