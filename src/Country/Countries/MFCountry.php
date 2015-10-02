<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class MFCountry implements Country
{
  public function getName()
  {
    return 'Saint Martin (French part)';
  }

  public function getIso2()
  {
    return 'MF';
  }

  public function getIso3()
  {
    return 'MAF';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 663;
  }

  public function getDialPrefix()
  {
    return 590;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
