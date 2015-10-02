<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardHelper;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardInterface;

abstract class CreditCardTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @param $number
   *
   * @return CreditCardInterface
   */
  abstract protected function makeCard($number);

  abstract protected function expectType();

  public function testCardType()
  {
    $this->assertEquals($this->expectType(), $this->makeCard('23')->getType());
  }

  /**
   * @param           $number
   * @param bool|true $expect
   *
   * @dataProvider cardNumberProvider
   */
  public function testCard($number, $expect = true, $verifyInstance = true)
  {
    $card = $this->makeCard($number);
    $this->assertEquals($expect, $card->isValid(), $number);
    $calcCard = CreditCardHelper::getCard($number);
    if($expect)
    {
      if($verifyInstance)
      {
        $this->assertInstanceOf(get_class($card), $calcCard);
      }
    }
    else
    {
      $this->assertNull($calcCard);
    }
  }

  public function testTestCards()
  {
    foreach($this->makeCard('1')->getTestNumbers() as $number)
    {
      $this->testCard($number);
    }
  }

  /**
   * @return array
   */
  abstract public function cardNumberProvider();
}
