<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GACountry implements CountryInterface
{
  public function getName()
  {
    return 'Gabon';
  }

  public function getIso2()
  {
    return 'GA';
  }

  public function getIso3()
  {
    return 'GAB';
  }

  public function getWmo()
  {
    return 'GO';
  }

  public function getNumericCode()
  {
    return 266;
  }

  public function getDialPrefix()
  {
    return 241;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
