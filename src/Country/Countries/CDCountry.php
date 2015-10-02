<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CDCountry implements Country
{
  public function getName()
  {
    return 'Congo, the Democratic Republic of the';
  }

  public function getIso2()
  {
    return 'CD';
  }

  public function getIso3()
  {
    return 'COD';
  }

  public function getWmo()
  {
    return 'ZR';
  }

  public function getNumericCode()
  {
    return 180;
  }

  public function getDialPrefix()
  {
    return 243;
  }

  public function getCurrencyCode()
  {
    return '';
  }
}
