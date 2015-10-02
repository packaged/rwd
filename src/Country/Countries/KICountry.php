<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KICountry implements CountryInterface
{
  public function getName()
  {
    return 'Kiribati';
  }

  public function getIso2()
  {
    return 'KI';
  }

  public function getIso3()
  {
    return 'KIR';
  }

  public function getWmo()
  {
    return 'KB';
  }

  public function getNumericCode()
  {
    return 296;
  }

  public function getDialPrefix()
  {
    return 686;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
