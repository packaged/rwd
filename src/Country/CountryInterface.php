<?php
namespace Packaged\Rwd\Country;

interface CountryInterface
{
  public function getName();

  public function getIso2();

  public function getIso3();

  public function getWmo();

  public function getNumericCode();

  public function getDialPrefix();

  public function getCurrencyCode();
}
