<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\AmericanExpress;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class AmericanExpressTest extends CreditCardTest
{
  protected function makeCard($number)
  {
    return new AmericanExpress($number);
  }

  protected function expectType()
  {
    return CreditCardType::AMEX;
  }

  public function cardNumberProvider()
  {
    return [
      ['374331745814175', true],
      ['340421915627498', true],
      ['374451034436462', true],
      ['456898769874', false],
      ['37445103436736', false],
      ['09876543212345624356', false],
    ];
  }

}
