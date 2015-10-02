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

  public function isValid()
  {
    $start = (int)substr($this->_cardNumber, 0, 2);
    if($start >= 51 && $start <= 55)
    {
      return parent::isValid();
    }
    return false;
  }

  public function getTestNumbers()
  {
    return [
      '5555555555554444',
      '5105105105105100',
    ];
  }
}
