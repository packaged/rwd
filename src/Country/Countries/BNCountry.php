<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BNCountry implements CountryInterface
{
  public function getName()
  {
    return 'Brunei Darussalam';
  }

  public function getIso2()
  {
    return 'BN';
  }

  public function getIso3()
  {
    return 'BRN';
  }

  public function getWmo()
  {
    return 'BD';
  }

  public function getNumericCode()
  {
    return 96;
  }

  public function getDialPrefix()
  {
    return 673;
  }

  public function getCurrencyCode()
  {
    return 'BND';
  }
}
