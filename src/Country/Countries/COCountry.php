<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class COCountry implements Country
{
  public function getName()
  {
    return 'Colombia';
  }

  public function getIso2()
  {
    return 'CO';
  }

  public function getIso3()
  {
    return 'COL';
  }

  public function getWmo()
  {
    return 'CO';
  }

  public function getNumericCode()
  {
    return 170;
  }

  public function getDialPrefix()
  {
    return 57;
  }

  public function getCurrencyCode()
  {
    return 'COP';
  }
}
