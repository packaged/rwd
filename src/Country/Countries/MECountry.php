<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MECountry implements CountryInterface
{
  public function getName()
  {
    return 'Montenegro';
  }

  public function getIso2()
  {
    return 'ME';
  }

  public function getIso3()
  {
    return 'MNE';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 499;
  }

  public function getDialPrefix()
  {
    return 382;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
