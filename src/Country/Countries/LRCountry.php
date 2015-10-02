<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class LRCountry implements CountryInterface
{
  public function getName()
  {
    return 'Liberia';
  }

  public function getIso2()
  {
    return 'LR';
  }

  public function getIso3()
  {
    return 'LBR';
  }

  public function getWmo()
  {
    return 'LI';
  }

  public function getNumericCode()
  {
    return 430;
  }

  public function getDialPrefix()
  {
    return 231;
  }

  public function getCurrencyCode()
  {
    return 'LRD';
  }
}
