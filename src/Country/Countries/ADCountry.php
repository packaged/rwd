<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ADCountry implements CountryInterface
{
  public function getName()
  {
    return 'Andorra';
  }

  public function getIso2()
  {
    return 'AD';
  }

  public function getIso3()
  {
    return 'AND';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 20;
  }

  public function getDialPrefix()
  {
    return 376;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
