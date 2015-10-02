<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class SICountry implements Country
{
  public function getName()
  {
    return 'Slovenia';
  }

  public function getIso2()
  {
    return 'SI';
  }

  public function getIso3()
  {
    return 'SVN';
  }

  public function getWmo()
  {
    return 'LJ';
  }

  public function getNumericCode()
  {
    return 705;
  }

  public function getDialPrefix()
  {
    return 386;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
