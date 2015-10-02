<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class SCCountry implements Country
{
  public function getName()
  {
    return 'Seychelles';
  }

  public function getIso2()
  {
    return 'SC';
  }

  public function getIso3()
  {
    return 'SYC';
  }

  public function getWmo()
  {
    return 'SC';
  }

  public function getNumericCode()
  {
    return 690;
  }

  public function getDialPrefix()
  {
    return 248;
  }

  public function getCurrencyCode()
  {
    return 'SCR';
  }
}
