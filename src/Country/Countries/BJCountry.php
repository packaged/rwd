<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BJCountry implements Country
{
  public function getName()
  {
    return 'Benin';
  }

  public function getIso2()
  {
    return 'BJ';
  }

  public function getIso3()
  {
    return 'BEN';
  }

  public function getWmo()
  {
    return 'BJ';
  }

  public function getNumericCode()
  {
    return 204;
  }

  public function getDialPrefix()
  {
    return 229;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
