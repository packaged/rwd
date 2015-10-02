<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class LUCountry implements Country
{
  public function getName()
  {
    return 'Luxembourg';
  }

  public function getIso2()
  {
    return 'LU';
  }

  public function getIso3()
  {
    return 'LUX';
  }

  public function getWmo()
  {
    return 'BX';
  }

  public function getNumericCode()
  {
    return 442;
  }

  public function getDialPrefix()
  {
    return 352;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
