<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class PFCountry implements Country
{
  public function getName()
  {
    return 'French Polynesia';
  }

  public function getIso2()
  {
    return 'PF';
  }

  public function getIso3()
  {
    return 'PYF';
  }

  public function getWmo()
  {
    return 'PF';
  }

  public function getNumericCode()
  {
    return 258;
  }

  public function getDialPrefix()
  {
    return 689;
  }

  public function getCurrencyCode()
  {
    return 'XPF';
  }
}
