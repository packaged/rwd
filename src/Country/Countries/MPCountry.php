<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class MPCountry implements Country
{
  public function getName()
  {
    return 'Northern Mariana Islands';
  }

  public function getIso2()
  {
    return 'MP';
  }

  public function getIso3()
  {
    return 'MNP';
  }

  public function getWmo()
  {
    return 'MY';
  }

  public function getNumericCode()
  {
    return 580;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
