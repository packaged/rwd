<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GWCountry implements CountryInterface
{
  public function getName()
  {
    return 'Guinea-Bissau';
  }

  public function getIso2()
  {
    return 'GW';
  }

  public function getIso3()
  {
    return 'GNB';
  }

  public function getWmo()
  {
    return 'GW';
  }

  public function getNumericCode()
  {
    return 624;
  }

  public function getDialPrefix()
  {
    return 245;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
