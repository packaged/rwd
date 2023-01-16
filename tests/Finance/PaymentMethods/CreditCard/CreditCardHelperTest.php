<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardHelper;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;
use PHPUnit\Framework\TestCase;

class CreditCardHelperTest extends TestCase
{
  /**
   * @param $number
   * @param $type
   *
   * @dataProvider cardTypes
   */
  public function testCardType($number, $type)
  {
    $this->assertEquals($type, CreditCardHelper::getType($number));
  }

  public function cardTypes()
  {
    return [
      ['4111111111111111', CreditCardType::VISA],
      ['41', CreditCardType::VISA],
      ['6011', CreditCardType::DISCOVER],
      ['34', CreditCardType::AMEX],
      ['37', CreditCardType::AMEX],
      ['300', CreditCardType::DINERS_CLUB],
      ['35284000', CreditCardType::JCB],
      ['55412', CreditCardType::MASTER_CARD],
      ['1234', CreditCardType::UNKNOWN],
      ['31', CreditCardType::UNKNOWN],
      ['', null],
      ['222199', CreditCardType::MASTER_CARD],
      ['250000', CreditCardType::MASTER_CARD],
      ['270000', CreditCardType::MASTER_CARD],
      ['2221000000000000', CreditCardType::MASTER_CARD],
      ['2555555555555555', CreditCardType::MASTER_CARD],
      ['2720990000000000', CreditCardType::MASTER_CARD],
    ];
  }
}
