<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CZCountry implements Country
{
  public function getName()
  {
    return 'Czech Republic';
  }

  public function getIso2()
  {
    return 'CZ';
  }

  public function getIso3()
  {
    return 'CZE';
  }

  public function getWmo()
  {
    return 'CZ';
  }

  public function getNumericCode()
  {
    return 203;
  }

  public function getDialPrefix()
  {
    return 420;
  }

  public function getCurrencyCode()
  {
    return 'CZK';
  }
}
