<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MZCountry implements Country
{
  public function getName()
  {
    return 'Mozambique';
  }

  public function getIso2()
  {
    return 'MZ';
  }

  public function getIso3()
  {
    return 'MOZ';
  }

  public function getWmo()
  {
    return 'MZ';
  }

  public function getNumericCode()
  {
    return 508;
  }

  public function getDialPrefix()
  {
    return 258;
  }

  public function getCurrencyCode()
  {
    return 'MZN';
  }
}
