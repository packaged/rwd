<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KWCountry implements CountryInterface
{
  public function getName()
  {
    return 'Kuwait';
  }

  public function getIso2()
  {
    return 'KW';
  }

  public function getIso3()
  {
    return 'KWT';
  }

  public function getWmo()
  {
    return 'KW';
  }

  public function getNumericCode()
  {
    return 414;
  }

  public function getDialPrefix()
  {
    return 965;
  }

  public function getCurrencyCode()
  {
    return 'KWD';
  }
}
