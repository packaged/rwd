<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SECountry implements Country
{
  public function getName()
  {
    return 'Sweden';
  }

  public function getIso2()
  {
    return 'SE';
  }

  public function getIso3()
  {
    return 'SWE';
  }

  public function getWmo()
  {
    return 'SN';
  }

  public function getNumericCode()
  {
    return 752;
  }

  public function getDialPrefix()
  {
    return 46;
  }

  public function getCurrencyCode()
  {
    return 'SEK';
  }
}
