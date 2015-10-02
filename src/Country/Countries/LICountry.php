<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class LICountry implements CountryInterface
{
  public function getName()
  {
    return 'Liechtenstein';
  }

  public function getIso2()
  {
    return 'LI';
  }

  public function getIso3()
  {
    return 'LIE';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 438;
  }

  public function getDialPrefix()
  {
    return 423;
  }

  public function getCurrencyCode()
  {
    return 'CHF';
  }
}
