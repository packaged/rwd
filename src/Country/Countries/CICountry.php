<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CICountry implements Country
{
  public function getName()
  {
    return 'Côte d\'Ivoire';
  }

  public function getIso2()
  {
    return 'CI';
  }

  public function getIso3()
  {
    return 'CIV';
  }

  public function getWmo()
  {
    return 'IV';
  }

  public function getNumericCode()
  {
    return 384;
  }

  public function getDialPrefix()
  {
    return 225;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
