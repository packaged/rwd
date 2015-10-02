<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SECountry implements CountryInterface
{
  public function getName()
  {
    return 'Sweden';
  }

  public function getIso2()
  {
    return 'SE';
  }

  public function getIso3()
  {
    return 'SWE';
  }

  public function getWmo()
  {
    return 'SN';
  }

  public function getNumericCode()
  {
    return 752;
  }

  public function getDialPrefix()
  {
    return 46;
  }

  public function getCurrencyCode()
  {
    return 'SEK';
  }
}
