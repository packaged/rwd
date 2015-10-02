<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GDCountry implements CountryInterface
{
  public function getName()
  {
    return 'Grenada';
  }

  public function getIso2()
  {
    return 'GD';
  }

  public function getIso3()
  {
    return 'GRD';
  }

  public function getWmo()
  {
    return 'GD';
  }

  public function getNumericCode()
  {
    return 308;
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
