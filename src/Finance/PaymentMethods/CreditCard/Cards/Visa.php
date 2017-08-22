<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class Visa extends AbstractCreditCard
{
  public function getType()
  {
    return CreditCardType::VISA;
  }

  public function partialNumberIsValid($partialNumber)
  {
    return (int)$partialNumber[0] == 4;
  }

  public function getTestNumbers()
  {
    return [
      '4111111111111111',
      '4012888888881881',
      '4222222222222',
    ];
  }

  public function getLengths()
  {
    return [13, 16];
  }

}
