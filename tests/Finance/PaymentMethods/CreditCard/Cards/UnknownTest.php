<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\UnknownCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class UnknownTest extends CreditCardTest
{
  protected function makeCard($number)
  {
    return new UnknownCard($number);
  }

  protected function expectType()
  {
    return CreditCardType::UNKNOWN;
  }

  public function cardNumberProvider()
  {
    // numbers taken from Visa test
    return [
      ['869962425774560', true], // Voyager
      ['869992837778503', true], // Voyager
      ['214951033214889', true], // enRoute
      ['214963774544796', true], // enRoute
      ['345rergerg74', false],
      ['41111112121211121', false],
      ['09876543212345624356', false],
    ];
  }
}
