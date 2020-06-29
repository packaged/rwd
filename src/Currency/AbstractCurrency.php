<?php
namespace Packaged\Rwd\Currency;

use function number_format;
use function str_replace;

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
    return trim(
      str_replace(
        [
          '{symbol}',
          '{number}',
          '{code}',
        ],
        [
          $showSymbol ? $this->getSymbol() : '',
          $this->numberFormat($amount),
          $showCode ? $this->getCode() : '',
        ],
        $this->_getRenderFormat($amount)
      )
    );
  }

  protected function _getRenderFormat($amount)
  {
    $return = $amount < 0 ? '-' : '';
    $return .= '{symbol}{number} {code}';
    return $return;
  }

  public function numberFormat($amount)
  {
    return number_format(
      $amount,
      $this->getDecimalCount(),
      $this->getDecimalSeparator(),
      $this->getThousandSeparator()
    );
  }

  public function __toString()
  {
    return $this->getCode();
  }
}
