<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Gambia';
  }

  public function getIso2()
  {
    return 'GM';
  }

  public function getIso3()
  {
    return 'GMB';
  }

  public function getWmo()
  {
    return 'GB';
  }

  public function getNumericCode()
  {
    return 270;
  }

  public function getDialPrefix()
  {
    return 220;
  }

  public function getCurrencyCode()
  {
    return 'GMD';
  }
}
