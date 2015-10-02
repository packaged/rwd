<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class KYCountry implements Country
{
  public function getName()
  {
    return 'Cayman Islands';
  }

  public function getIso2()
  {
    return 'KY';
  }

  public function getIso3()
  {
    return 'CYM';
  }

  public function getWmo()
  {
    return 'GC';
  }

  public function getNumericCode()
  {
    return 136;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'KYD';
  }
}
