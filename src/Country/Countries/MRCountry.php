<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MRCountry implements Country
{
  public function getName()
  {
    return 'Mauritania';
  }

  public function getIso2()
  {
    return 'MR';
  }

  public function getIso3()
  {
    return 'MRT';
  }

  public function getWmo()
  {
    return 'MT';
  }

  public function getNumericCode()
  {
    return 478;
  }

  public function getDialPrefix()
  {
    return 222;
  }

  public function getCurrencyCode()
  {
    return 'MRO';
  }
}
