<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class SACountry implements Country
{
  public function getName()
  {
    return 'Saudi Arabia';
  }

  public function getIso2()
  {
    return 'SA';
  }

  public function getIso3()
  {
    return 'SAU';
  }

  public function getWmo()
  {
    return 'SD';
  }

  public function getNumericCode()
  {
    return 682;
  }

  public function getDialPrefix()
  {
    return 966;
  }

  public function getCurrencyCode()
  {
    return 'SAR';
  }
}
