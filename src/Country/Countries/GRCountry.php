<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class GRCountry implements Country
{
  public function getName()
  {
    return 'Greece';
  }

  public function getIso2()
  {
    return 'GR';
  }

  public function getIso3()
  {
    return 'GRC';
  }

  public function getWmo()
  {
    return 'GR';
  }

  public function getNumericCode()
  {
    return 300;
  }

  public function getDialPrefix()
  {
    return 30;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
