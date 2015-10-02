<?php
namespace Packaged\Rwd\Currency;

interface Currency
{
  public function getSymbol();

  public function getCode();

  public function getNumericCode();

  public function getName();

  public function getDecimalCount();

  public function getDecimalSeparator();

  public function getThousandSeparator();

  public function getMajorUnit();

  public function getMinorUnit();
}
