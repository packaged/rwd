<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MYCountry implements CountryInterface
{
  public function getName()
  {
    return 'Malaysia';
  }

  public function getIso2()
  {
    return 'MY';
  }

  public function getIso3()
  {
    return 'MYS';
  }

  public function getWmo()
  {
    return 'MS';
  }

  public function getNumericCode()
  {
    return 458;
  }

  public function getDialPrefix()
  {
    return 60;
  }

  public function getCurrencyCode()
  {
    return 'MYR';
  }
}
