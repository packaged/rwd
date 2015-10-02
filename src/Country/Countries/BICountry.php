<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BICountry implements CountryInterface
{
  public function getName()
  {
    return 'Burundi';
  }

  public function getIso2()
  {
    return 'BI';
  }

  public function getIso3()
  {
    return 'BDI';
  }

  public function getWmo()
  {
    return 'BI';
  }

  public function getNumericCode()
  {
    return 108;
  }

  public function getDialPrefix()
  {
    return 257;
  }

  public function getCurrencyCode()
  {
    return 'BIF';
  }
}
