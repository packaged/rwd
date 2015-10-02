<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class NECountry implements Country
{
  public function getName()
  {
    return 'Niger';
  }

  public function getIso2()
  {
    return 'NE';
  }

  public function getIso3()
  {
    return 'NER';
  }

  public function getWmo()
  {
    return 'NR';
  }

  public function getNumericCode()
  {
    return 562;
  }

  public function getDialPrefix()
  {
    return 227;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
