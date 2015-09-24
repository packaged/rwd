<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class AXCountry implements Country
{
  public function getName()
  {
    return 'Åland Islands';
  }

  public function getIso2()
  {
    return 'AX';
  }

  public function getIso3()
  {
    return 'ALA';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 248;
  }

  public function getDialPrefix()
  {
    return 358;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
