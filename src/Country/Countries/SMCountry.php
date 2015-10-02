<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SMCountry implements CountryInterface
{
  public function getName()
  {
    return 'San Marino';
  }

  public function getIso2()
  {
    return 'SM';
  }

  public function getIso3()
  {
    return 'SMR';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 674;
  }

  public function getDialPrefix()
  {
    return 378;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
