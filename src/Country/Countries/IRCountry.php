<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class IRCountry implements CountryInterface
{
  public function getName()
  {
    return 'Iran, Islamic Republic of';
  }

  public function getIso2()
  {
    return 'IR';
  }

  public function getIso3()
  {
    return 'IRN';
  }

  public function getWmo()
  {
    return 'IR';
  }

  public function getNumericCode()
  {
    return 364;
  }

  public function getDialPrefix()
  {
    return 98;
  }

  public function getCurrencyCode()
  {
    return 'IRR';
  }
}
