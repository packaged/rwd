<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class MMCountry implements Country
{
  public function getName()
  {
    return 'Myanmar';
  }

  public function getIso2()
  {
    return 'MM';
  }

  public function getIso3()
  {
    return 'MMR';
  }

  public function getWmo()
  {
    return 'BM';
  }

  public function getNumericCode()
  {
    return 104;
  }

  public function getDialPrefix()
  {
    return 95;
  }

  public function getCurrencyCode()
  {
    return 'MMK';
  }
}
