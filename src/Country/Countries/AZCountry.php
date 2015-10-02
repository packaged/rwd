<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class AZCountry implements Country
{
  public function getName()
  {
    return 'Azerbaijan';
  }

  public function getIso2()
  {
    return 'AZ';
  }

  public function getIso3()
  {
    return 'AZE';
  }

  public function getWmo()
  {
    return 'AJ';
  }

  public function getNumericCode()
  {
    return 31;
  }

  public function getDialPrefix()
  {
    return 994;
  }

  public function getCurrencyCode()
  {
    return 'AZN';
  }
}
