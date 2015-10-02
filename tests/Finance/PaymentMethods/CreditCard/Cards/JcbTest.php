<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\JCB;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class JcbTest extends CreditCardTest
{
  protected function makeCard($number)
  {
    return new JCB($number);
  }

  protected function expectType()
  {
    return CreditCardType::JCB;
  }

  public function cardNumberProvider()
  {
    return [
      ['3566003566003566', true],
      ['3528000000000007', true],
      ['345rergerg74', false],
      ['41111112121211121', false],
      ['09876543212345624356', false],
    ];
  }

}
