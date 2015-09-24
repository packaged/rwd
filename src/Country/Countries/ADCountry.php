<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ADCountry implements Country
{
  public function getName()
  {
    return 'Andorra';
  }

  public function getIso2()
  {
    return 'AD';
  }

  public function getIso3()
  {
    return 'AND';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 20;
  }

  public function getDialPrefix()
  {
    return 376;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
