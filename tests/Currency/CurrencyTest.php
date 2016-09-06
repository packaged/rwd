<?php
namespace Packaged\Tests\Rwd\Currency;

use Packaged\Rwd\Currency\CurrencyHelper;

class CurrencyTest extends \PHPUnit_Framework_TestCase
{
  public function testUsdCurrencyValue()
  {
    $gbp = CurrencyHelper::getCurrency('GBP');
    $this->assertEquals(1, $gbp->getUSDAverageValue($gbp->getUSDAverage()));
    $this->assertEquals(1.658, $gbp->getUSDAverageValue(1), '', 0.001);

    $jpy = CurrencyHelper::getCurrency('JPY');
    $this->assertEquals(1, $jpy->getUSDAverageValue($jpy->getUSDAverage()));
    $this->assertEquals(1.994, $jpy->getUSDAverageValue(200), '', 0.001);
  }
}
