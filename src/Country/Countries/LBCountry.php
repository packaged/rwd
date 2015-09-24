<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class LBCountry implements Country
{
  public function getName()
  {
    return 'Lebanon';
  }

  public function getIso2()
  {
    return 'LB';
  }

  public function getIso3()
  {
    return 'LBN';
  }

  public function getWmo()
  {
    return 'LB';
  }

  public function getNumericCode()
  {
    return 422;
  }

  public function getDialPrefix()
  {
    return 961;
  }

  public function getCurrencyCode()
  {
    return 'LBP';
  }
}
