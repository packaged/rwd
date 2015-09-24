<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SZCountry implements Country
{
  public function getName()
  {
    return 'Swaziland';
  }

  public function getIso2()
  {
    return 'SZ';
  }

  public function getIso3()
  {
    return 'SWZ';
  }

  public function getWmo()
  {
    return 'SV';
  }

  public function getNumericCode()
  {
    return 748;
  }

  public function getDialPrefix()
  {
    return 268;
  }

  public function getCurrencyCode()
  {
    return 'SZL';
  }
}
