<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SNCountry implements Country
{
  public function getName()
  {
    return 'Senegal';
  }

  public function getIso2()
  {
    return 'SN';
  }

  public function getIso3()
  {
    return 'SEN';
  }

  public function getWmo()
  {
    return 'SG';
  }

  public function getNumericCode()
  {
    return 686;
  }

  public function getDialPrefix()
  {
    return 221;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
