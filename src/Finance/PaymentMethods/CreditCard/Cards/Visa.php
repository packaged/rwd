<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class Visa extends AbstractCreditCard
{
  public function getTypeName()
  {
    return 'Visa';
  }

  public function getType()
  {
    return CreditCardType::VISA;
  }

  public function isValid()
  {
    if((int)$this->_cardNumber[0] == 4)
    {
      return parent::isValid();
    }
    return false;
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
