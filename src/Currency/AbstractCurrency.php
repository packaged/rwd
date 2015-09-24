<?php
namespace Fortifi\Rwd\Currency;

abstract class AbstractCurrency implements Currency
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
