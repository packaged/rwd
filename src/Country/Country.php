<?php
namespace Fortifi\Rwd\Country;

interface Country
{
  public function getName();

  public function getIso2();

  public function getIso3();

  public function getWmo();

  public function getNumericCode();

  public function getDialPrefix();

  public function getCurrencyCode();
}
