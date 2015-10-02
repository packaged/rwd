<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class ILCountry implements Country
{
  public function getName()
  {
    return 'Israel';
  }

  public function getIso2()
  {
    return 'IL';
  }

  public function getIso3()
  {
    return 'ISR';
  }

  public function getWmo()
  {
    return 'IS';
  }

  public function getNumericCode()
  {
    return 376;
  }

  public function getDialPrefix()
  {
    return 972;
  }

  public function getCurrencyCode()
  {
    return 'ILS';
  }
}
