<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class Discover extends AbstractCreditCard
{
  public function getTypeName()
  {
    return 'Discover';
  }

  public function getType()
  {
    return CreditCardType::DISCOVER;
  }

  public function partialNumberIsValid($partialNumber)
  {
    $start = (int)substr($partialNumber, 0, 6);
    $startThree = (int)substr($partialNumber, 0, 3);

    return ($start >= 622126 && $start <= 622925)
    || ($startThree >= 644 && $startThree <= 649)
    || ((int)substr($partialNumber, 0, 2) == 65)
    || ((int)substr($partialNumber, 0, 4) == 6011);
  }

  public function getTestNumbers()
  {
    return [
      '6011111111111117',
      '6011000990139424',
    ];
  }
}
