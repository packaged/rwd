<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class LCCountry implements CountryInterface
{
  public function getName()
  {
    return 'Saint Lucia';
  }

  public function getIso2()
  {
    return 'LC';
  }

  public function getIso3()
  {
    return 'LCA';
  }

  public function getWmo()
  {
    return 'LC';
  }

  public function getNumericCode()
  {
    return 662;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'XCD';
  }
}
