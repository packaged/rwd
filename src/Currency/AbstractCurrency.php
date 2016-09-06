<?php
namespace Packaged\Rwd\Currency;

abstract class AbstractCurrency implements CurrencyInterface
{
  public function getDecimalCount()
  {
    return 2;
  }

  public function getDecimalSeparator()
  {
    return '.';
  }

  public function getThousandSeparator()
  {
    return ',';
  }

  public function getUSDAverage()
  {
    return 1;
  }

  public function getUSDAverageValue($value)
  {
    return $value * (1 / ($this->getUSDAverage()));
  }

  public function format($amount, $showSymbol = true, $showCode = false)
  {
    $return = '';
    if($showSymbol)
    {
      $return .= $this->getSymbol();
    }

    $return .= number_format(
      $amount,
      $this->getDecimalCount(),
      $this->getDecimalSeparator(),
      $this->getThousandSeparator()
    );

    if($showCode)
    {
      $return .= ' ' . $this->getCode();
    }

    return $return;
  }
}
