<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class AICountry implements Country
{
  public function getName()
  {
    return 'Anguilla';
  }

  public function getIso2()
  {
    return 'AI';
  }

  public function getIso3()
  {
    return 'AIA';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 660;
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
