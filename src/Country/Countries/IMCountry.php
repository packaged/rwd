<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class IMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Isle of Man';
  }

  public function getIso2()
  {
    return 'IM';
  }

  public function getIso3()
  {
    return 'IMN';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 833;
  }

  public function getDialPrefix()
  {
    return 44;
  }

  public function getCurrencyCode()
  {
    return 'GBP';
  }
}
