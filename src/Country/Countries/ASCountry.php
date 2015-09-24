<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ASCountry implements Country
{
  public function getName()
  {
    return 'American Samoa';
  }

  public function getIso2()
  {
    return 'AS';
  }

  public function getIso3()
  {
    return 'ASM';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 16;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
