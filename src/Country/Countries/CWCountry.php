<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class CWCountry implements CountryInterface
{
  public function getName()
  {
    return 'Curaçao';
  }

  public function getIso2()
  {
    return 'CW';
  }

  public function getIso3()
  {
    return 'CUW';
  }

  public function getWmo()
  {
    return '';
  }

  public function getNumericCode()
  {
    return 531;
  }

  public function getDialPrefix()
  {
    return 599;
  }

  public function getCurrencyCode()
  {
    return 'ANG';
  }
}
