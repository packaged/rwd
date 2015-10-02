<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class Discover extends AbstractCreditCard
{
  public function getType()
  {
    return CreditCardType::DISCOVER;
  }

  public function isValid()
  {
    $start = (int)substr($this->_cardNumber, 0, 6);
    $startThree = (int)substr($this->_cardNumber, 0, 3);
    if(
      ($start >= 622126 && $start <= 622925) ||
      ($startThree >= 644 && $startThree <= 649) ||
      (int)substr($this->_cardNumber, 0, 2) == 65 ||
      (int)substr($this->_cardNumber, 0, 4) == 6011
    )
    {
      return parent::isValid();
    }
    return false;
  }

  public function getTestNumbers()
  {
    return [
      '6011111111111117',
      '6011000990139424',
    ];
  }
}
