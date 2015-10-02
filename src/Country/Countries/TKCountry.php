<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TKCountry implements CountryInterface
{
  public function getName()
  {
    return 'Tokelau';
  }

  public function getIso2()
  {
    return 'TK';
  }

  public function getIso3()
  {
    return 'TKL';
  }

  public function getWmo()
  {
    return 'TK';
  }

  public function getNumericCode()
  {
    return 772;
  }

  public function getDialPrefix()
  {
    return 690;
  }

  public function getCurrencyCode()
  {
    return 'NZD';
  }
}
