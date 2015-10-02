<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class NPCountry implements Country
{
  public function getName()
  {
    return 'Nepal';
  }

  public function getIso2()
  {
    return 'NP';
  }

  public function getIso3()
  {
    return 'NPL';
  }

  public function getWmo()
  {
    return 'NP';
  }

  public function getNumericCode()
  {
    return 524;
  }

  public function getDialPrefix()
  {
    return 977;
  }

  public function getCurrencyCode()
  {
    return 'NPR';
  }
}
