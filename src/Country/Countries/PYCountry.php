<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class PYCountry implements Country
{
  public function getName()
  {
    return 'Paraguay';
  }

  public function getIso2()
  {
    return 'PY';
  }

  public function getIso3()
  {
    return 'PRY';
  }

  public function getWmo()
  {
    return 'PY';
  }

  public function getNumericCode()
  {
    return 600;
  }

  public function getDialPrefix()
  {
    return 595;
  }

  public function getCurrencyCode()
  {
    return 'PYG';
  }
}
