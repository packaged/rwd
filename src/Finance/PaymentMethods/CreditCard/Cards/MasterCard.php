<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class MasterCard extends AbstractCreditCard
{
  public function getTypeName()
  {
    return 'Master Card';
  }

  public function getType()
  {
    return CreditCardType::MASTER_CARD;
  }

  public function isValid()
  {
    $start = (int)substr($this->_cardNumber, 0, 2);
    $bin = (int)substr($this->_cardNumber, 0, 6);
    if(($start >= 51 && $start <= 55) || ($bin >= 222100 && $bin <= 272099))
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
