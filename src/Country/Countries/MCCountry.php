<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MCCountry implements CountryInterface
{
  public function getName()
  {
    return 'Monaco';
  }

  public function getIso2()
  {
    return 'MC';
  }

  public function getIso3()
  {
    return 'MCO';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 492;
  }

  public function getDialPrefix()
  {
    return 377;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
