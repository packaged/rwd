<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class PMCountry implements Country
{
  public function getName()
  {
    return 'Saint Pierre and Miquelon';
  }

  public function getIso2()
  {
    return 'PM';
  }

  public function getIso3()
  {
    return 'SPM';
  }

  public function getWmo()
  {
    return 'FP';
  }

  public function getNumericCode()
  {
    return 666;
  }

  public function getDialPrefix()
  {
    return 508;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
