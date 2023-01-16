<?php
namespace Packaged\Tests\Rwd\Currency;

use Packaged\Rwd\Currency\CurrencyHelper;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
  public function testUsdCurrencyValue()
  {
    $gbp = CurrencyHelper::getCurrency('GBP');
    $this->assertEquals(1, $gbp->getUSDAverageValue($gbp->getUSDAverage()), '', 0.001);
    self::assertEquals(1.658, $gbp->getUSDAverageValue(1), '', 0.001);

    $jpy = CurrencyHelper::getCurrency('JPY');
    $this->assertEquals(1, $jpy->getUSDAverageValue($jpy->getUSDAverage()), '', 0.001);
    $this->assertEquals(1.994, $jpy->getUSDAverageValue(200), '', 0.001);
  }

  public function testCurrencyFormat()
  {
    $gbp = CurrencyHelper::getCurrency('GBP');
    $this->assertEquals('£123.00', $gbp->format(123));
    $this->assertEquals('-£123.00', $gbp->format(-123));

    $jpy = CurrencyHelper::getCurrency('JPY');
    $this->assertEquals('¥123', $jpy->format(123));
    $this->assertEquals('-¥123', $jpy->format(-123));
  }
}
