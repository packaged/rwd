<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CXCountry implements Country
{
  public function getName()
  {
    return 'Christmas Island';
  }

  public function getIso2()
  {
    return 'CX';
  }

  public function getIso3()
  {
    return 'CXR';
  }

  public function getWmo()
  {
    return 'KI';
  }

  public function getNumericCode()
  {
    return 162;
  }

  public function getDialPrefix()
  {
    return 61;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
