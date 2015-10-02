<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class VACountry implements Country
{
  public function getName()
  {
    return 'Holy See (Vatican City State)';
  }

  public function getIso2()
  {
    return 'VA';
  }

  public function getIso3()
  {
    return 'VAT';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 336;
  }

  public function getDialPrefix()
  {
    return 39;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
