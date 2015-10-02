<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CFCountry implements Country
{
  public function getName()
  {
    return 'Central African Republic';
  }

  public function getIso2()
  {
    return 'CF';
  }

  public function getIso3()
  {
    return 'CAF';
  }

  public function getWmo()
  {
    return 'CE';
  }

  public function getNumericCode()
  {
    return 140;
  }

  public function getDialPrefix()
  {
    return 236;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
