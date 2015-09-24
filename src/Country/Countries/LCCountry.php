<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class LCCountry implements Country
{
  public function getName()
  {
    return 'Saint Lucia';
  }

  public function getIso2()
  {
    return 'LC';
  }

  public function getIso3()
  {
    return 'LCA';
  }

  public function getWmo()
  {
    return 'LC';
  }

  public function getNumericCode()
  {
    return 662;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'XCD';
  }
}
