<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class TNCountry implements Country
{
  public function getName()
  {
    return 'Tunisia';
  }

  public function getIso2()
  {
    return 'TN';
  }

  public function getIso3()
  {
    return 'TUN';
  }

  public function getWmo()
  {
    return 'TS';
  }

  public function getNumericCode()
  {
    return 788;
  }

  public function getDialPrefix()
  {
    return 216;
  }

  public function getCurrencyCode()
  {
    return 'TND';
  }
}
