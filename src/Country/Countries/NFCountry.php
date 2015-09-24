<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class NFCountry implements Country
{
  public function getName()
  {
    return 'Norfolk Island';
  }

  public function getIso2()
  {
    return 'NF';
  }

  public function getIso3()
  {
    return 'NFK';
  }

  public function getWmo()
  {
    return 'NF';
  }

  public function getNumericCode()
  {
    return 574;
  }

  public function getDialPrefix()
  {
    return 672;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
