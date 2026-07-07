<?php
namespace Packaged\Tests\Rwd\Currency;

use Packaged\Rwd\Currency\Currencies\GBPCurrency;
use Packaged\Rwd\Currency\Currencies\USDCurrency;
use Packaged\Rwd\Currency\CurrencyHelper;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
  public function testUsdCurrencyValue()
  {
    $gbp = CurrencyHelper::getCurrency('GBP');
    self::assertEqualsWithDelta(1, $gbp->getUSDAverageValue($gbp->getUSDAverage()), 0.001);
    self::assertEqualsWithDelta(1.658, $gbp->getUSDAverageValue(1), 0.001);

    $jpy = CurrencyHelper::getCurrency('JPY');
    self::assertEqualsWithDelta(1, $jpy->getUSDAverageValue($jpy->getUSDAverage()), 0.001);
    self::assertEqualsWithDelta(1.994, $jpy->getUSDAverageValue(200), 0.001);
  }

  public function testCurrencyFormat()
  {
    $gbp = CurrencyHelper::getCurrency('GBP');
    self::assertEquals('£123.00', $gbp->format(123));
    self::assertEquals('-£123.00', $gbp->format(-123));

    $jpy = CurrencyHelper::getCurrency('JPY');
    self::assertEquals('¥123', $jpy->format(123));
    self::assertEquals('-¥123', $jpy->format(-123));
  }

  public function testCodeIsNormalised()
  {
    self::assertInstanceOf(USDCurrency::class, CurrencyHelper::getCurrency('usd'));
    self::assertInstanceOf(USDCurrency::class, CurrencyHelper::getCurrency('Usd'));
    self::assertInstanceOf(USDCurrency::class, CurrencyHelper::getCurrency(' USD '));
    self::assertInstanceOf(USDCurrency::class, CurrencyHelper::getCurrency("\tusd\n"));
  }

  public function testFallbackToDefault()
  {
    self::assertInstanceOf(GBPCurrency::class, CurrencyHelper::getCurrency('XXX', 'GBP'));
    self::assertInstanceOf(GBPCurrency::class, CurrencyHelper::getCurrency('xxx', 'gbp'));
    self::assertInstanceOf(GBPCurrency::class, CurrencyHelper::getCurrency(null, ' gbp '));
    self::assertInstanceOf(GBPCurrency::class, CurrencyHelper::getCurrency('', 'GBP'));
  }

  public function testInvalidCodeThrows()
  {
    $this->expectException(\RuntimeException::class);
    $this->expectExceptionMessage('XXX is not a supported currency');
    CurrencyHelper::getCurrency('xxx');
  }

  public function testInvalidCodeAndDefaultThrows()
  {
    $this->expectException(\RuntimeException::class);
    CurrencyHelper::getCurrency('xxx', 'xxx');
  }

  public function testNullCodeThrows()
  {
    $this->expectException(\RuntimeException::class);
    CurrencyHelper::getCurrency(null);
  }
}
