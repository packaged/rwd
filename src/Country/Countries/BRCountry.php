<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BRCountry implements Country
{
  public function getName()
  {
    return 'Brazil';
  }

  public function getIso2()
  {
    return 'BR';
  }

  public function getIso3()
  {
    return 'BRA';
  }

  public function getWmo()
  {
    return 'BZ';
  }

  public function getNumericCode()
  {
    return 76;
  }

  public function getDialPrefix()
  {
    return 55;
  }

  public function getCurrencyCode()
  {
    return 'BRL';
  }
}
