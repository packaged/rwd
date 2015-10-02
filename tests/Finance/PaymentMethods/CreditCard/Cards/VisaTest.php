<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Visa;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class VisaTest extends CreditCardTest
{
  protected function makeCard($number)
  {
    return new Visa($number);
  }

  protected function expectType()
  {
    return CreditCardType::VISA;
  }

  public function cardNumberProvider()
  {
    return [
      ['4716881980065031', true],
      ['4539666175284314', true],
      ['4539-6661-7528-4314', true],
      ['4716300268826113', true],
      ['345rergerg74', false],
      ['41111112121211121', false],
      ['09876543212345624356', false],
    ];
  }

}
