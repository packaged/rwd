<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class QACountry implements CountryInterface
{
  public function getName()
  {
    return 'Qatar';
  }

  public function getIso2()
  {
    return 'QA';
  }

  public function getIso3()
  {
    return 'QAT';
  }

  public function getWmo()
  {
    return 'QT';
  }

  public function getNumericCode()
  {
    return 634;
  }

  public function getDialPrefix()
  {
    return 974;
  }

  public function getCurrencyCode()
  {
    return 'QAR';
  }
}
