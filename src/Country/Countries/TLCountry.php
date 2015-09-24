<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class TLCountry implements Country
{
  public function getName()
  {
    return 'Timor-Leste';
  }

  public function getIso2()
  {
    return 'TL';
  }

  public function getIso3()
  {
    return 'TLS';
  }

  public function getWmo()
  {
    return 'TM';
  }

  public function getNumericCode()
  {
    return 626;
  }

  public function getDialPrefix()
  {
    return 670;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
