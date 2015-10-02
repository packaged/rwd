<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TDCountry implements CountryInterface
{
  public function getName()
  {
    return 'Chad';
  }

  public function getIso2()
  {
    return 'TD';
  }

  public function getIso3()
  {
    return 'TCD';
  }

  public function getWmo()
  {
    return 'CD';
  }

  public function getNumericCode()
  {
    return 148;
  }

  public function getDialPrefix()
  {
    return 235;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
