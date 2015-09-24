<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class WFCountry implements Country
{
  public function getName()
  {
    return 'Wallis and Futuna';
  }

  public function getIso2()
  {
    return 'WF';
  }

  public function getIso3()
  {
    return 'WLF';
  }

  public function getWmo()
  {
    return 'FW';
  }

  public function getNumericCode()
  {
    return 876;
  }

  public function getDialPrefix()
  {
    return 681;
  }

  public function getCurrencyCode()
  {
    return 'XPF';
  }
}
