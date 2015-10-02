<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class SXCountry implements CountryInterface
{
  public function getName()
  {
    return 'Sint Maarten (Dutch part)';
  }

  public function getIso2()
  {
    return 'SX';
  }

  public function getIso3()
  {
    return 'SXM';
  }

  public function getWmo()
  {
    return '';
  }

  public function getNumericCode()
  {
    return 534;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'ANG';
  }
}
