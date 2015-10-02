<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class PTCountry implements Country
{
  public function getName()
  {
    return 'Portugal';
  }

  public function getIso2()
  {
    return 'PT';
  }

  public function getIso3()
  {
    return 'PRT';
  }

  public function getWmo()
  {
    return 'PO';
  }

  public function getNumericCode()
  {
    return 620;
  }

  public function getDialPrefix()
  {
    return 351;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
