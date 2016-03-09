<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class AmericanExpress extends AbstractCreditCard
{
  public function getTypeName()
  {
    return 'American Express';
  }

  public function getType()
  {
    return CreditCardType::AMEX;
  }

  public function partialNumberIsValid($partialNumber)
  {
    return (int)$partialNumber[0] == 3
    && in_array((int)$partialNumber[1], [4, 7]);;
  }

  public function getLengths()
  {
    return [15];
  }

  public function getTestNumbers()
  {
    return [
      '378282246310005',
      '371449635398431',
      '378734493671000', //Corporate
    ];
  }
}
