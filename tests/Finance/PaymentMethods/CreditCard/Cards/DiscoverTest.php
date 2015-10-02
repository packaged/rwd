<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Discover;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class DiscoverTest extends CreditCardTest
{
  protected function makeCard($number)
  {
    return new Discover($number);
  }

  protected function expectType()
  {
    return CreditCardType::DISCOVER;
  }

  public function cardNumberProvider()
  {
    return [
      ['6011524198681820', true],
      ['6011913969756343', true],
      ['6011815509818535', true],
      ['345rergerg74', false],
      ['41111112121211121', false],
      ['09876543212345624356', false],
    ];
  }

}
