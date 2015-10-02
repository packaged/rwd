<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class LBCountry implements CountryInterface
{
  public function getName()
  {
    return 'Lebanon';
  }

  public function getIso2()
  {
    return 'LB';
  }

  public function getIso3()
  {
    return 'LBN';
  }

  public function getWmo()
  {
    return 'LB';
  }

  public function getNumericCode()
  {
    return 422;
  }

  public function getDialPrefix()
  {
    return 961;
  }

  public function getCurrencyCode()
  {
    return 'LBP';
  }
}
