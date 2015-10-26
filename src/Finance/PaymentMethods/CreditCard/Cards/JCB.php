<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class JCB extends AbstractCreditCard
{
  public function getTypeName()
  {
    return 'JCB';
  }

  public function getType()
  {
    return CreditCardType::JCB;
  }

  public function isValid()
  {
    $start = (int)substr($this->_cardNumber, 0, 4);
    if($start >= 3528 && $start <= 3589)
    {
      return parent::isValid();
    }
    return false;
  }

  public function getTestNumbers()
  {
    return [
      '3530111333300000',
      '3566002020360505',
    ];
  }
}
