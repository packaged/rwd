<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\MasterCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class MasterCardTest extends CreditCardTest
{
  protected function makeCard($number)
  {
    return new MasterCard($number);
  }

  protected function expectType()
  {
    return CreditCardType::MASTER_CARD;
  }

  public function cardNumberProvider()
  {
    return [
      ['5217129636860467', true],
      ['5102676335296730', true],
      ['5426678225470770', true],
      ['5426-6782-2547-0770', true],
      ['345rergerg74', false],
      ['41111112121211121', false],
      ['09876543212345624356', false],
    ];
  }

}
