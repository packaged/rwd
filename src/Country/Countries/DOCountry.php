<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class DOCountry implements Country
{
  public function getName()
  {
    return 'Dominican Republic';
  }

  public function getIso2()
  {
    return 'DO';
  }

  public function getIso3()
  {
    return 'DOM';
  }

  public function getWmo()
  {
    return 'DR';
  }

  public function getNumericCode()
  {
    return 214;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'DOP';
  }
}
