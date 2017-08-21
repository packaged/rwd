<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class UnknownCard extends AbstractCreditCard
{
  public function getType()
  {
    return CreditCardType::UNKNOWN;
  }

  public function partialNumberIsValid($partialNumber)
  {
    return true;
  }

  public function getLengths()
  {
    return range(12, 19, 1);
  }
}
