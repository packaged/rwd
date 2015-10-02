<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CNCountry implements Country
{
  public function getName()
  {
    return 'China';
  }

  public function getIso2()
  {
    return 'CN';
  }

  public function getIso3()
  {
    return 'CHN';
  }

  public function getWmo()
  {
    return 'CI';
  }

  public function getNumericCode()
  {
    return 156;
  }

  public function getDialPrefix()
  {
    return 86;
  }

  public function getCurrencyCode()
  {
    return 'CNY';
  }
}
