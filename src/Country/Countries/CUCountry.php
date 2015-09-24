<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CUCountry implements Country
{
  public function getName()
  {
    return 'Cuba';
  }

  public function getIso2()
  {
    return 'CU';
  }

  public function getIso3()
  {
    return 'CUB';
  }

  public function getWmo()
  {
    return 'CU';
  }

  public function getNumericCode()
  {
    return 192;
  }

  public function getDialPrefix()
  {
    return 53;
  }

  public function getCurrencyCode()
  {
    return 'CUP';
  }
}
