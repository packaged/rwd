<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class PGCountry implements Country
{
  public function getName()
  {
    return 'Papua New Guinea';
  }

  public function getIso2()
  {
    return 'PG';
  }

  public function getIso3()
  {
    return 'PNG';
  }

  public function getWmo()
  {
    return 'NG';
  }

  public function getNumericCode()
  {
    return 598;
  }

  public function getDialPrefix()
  {
    return 675;
  }

  public function getCurrencyCode()
  {
    return 'PGK';
  }
}
