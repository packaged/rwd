<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class MasterCard extends AbstractCreditCard
{
  public function getType()
  {
    return CreditCardType::MASTER_CARD;
  }

  public function partialNumberIsValid($partialNumber)
  {
    $start = (int)substr($partialNumber, 0, 2);
    $bin = (int)substr($partialNumber, 0, 6);
    return ($start >= 51 && $start <= 55) || ($bin >= 222100 && $bin <= 272099);
  }

  public function getTestNumbers()
  {
    return [
      '5555555555554444',
      '5105105105105100',
    ];
  }
}
