<?php
namespace Fortifi\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class AmericanExpress extends AbstractCreditCard
{
  public function getType()
  {
    return CreditCardType::AMEX;
  }

  public function isValid()
  {
    if((int)$this->_cardNumber[0] == 3
      && in_array((int)$this->_cardNumber[1], [4, 7])
    )
    {
      return parent::isValid();
    }
    return false;
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
