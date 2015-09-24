<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class PNCountry implements Country
{
  public function getName()
  {
    return 'Pitcairn';
  }

  public function getIso2()
  {
    return 'PN';
  }

  public function getIso3()
  {
    return 'PCN';
  }

  public function getWmo()
  {
    return 'PT';
  }

  public function getNumericCode()
  {
    return 612;
  }

  public function getDialPrefix()
  {
    return 870;
  }

  public function getCurrencyCode()
  {
    return 'NZD';
  }
}
