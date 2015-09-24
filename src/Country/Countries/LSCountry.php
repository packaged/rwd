<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class LSCountry implements Country
{
  public function getName()
  {
    return 'Lesotho';
  }

  public function getIso2()
  {
    return 'LS';
  }

  public function getIso3()
  {
    return 'LSO';
  }

  public function getWmo()
  {
    return 'LS';
  }

  public function getNumericCode()
  {
    return 426;
  }

  public function getDialPrefix()
  {
    return 266;
  }

  public function getCurrencyCode()
  {
    return 'ZAR';
  }
}
