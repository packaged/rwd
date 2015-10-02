<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class STCountry implements Country
{
  public function getName()
  {
    return 'Sao Tome and Principe';
  }

  public function getIso2()
  {
    return 'ST';
  }

  public function getIso3()
  {
    return 'STP';
  }

  public function getWmo()
  {
    return 'TP';
  }

  public function getNumericCode()
  {
    return 678;
  }

  public function getDialPrefix()
  {
    return 239;
  }

  public function getCurrencyCode()
  {
    return 'STD';
  }
}
