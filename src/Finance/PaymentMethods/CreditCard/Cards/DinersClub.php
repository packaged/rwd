<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class DinersClub extends AbstractCreditCard
{
  public function getTypeName()
  {
    return 'Diners Club';
  }

  public function getType()
  {
    return CreditCardType::DINERS_CLUB;
  }

  public function partialNumberIsValid($partialNumber)
  {
    $start = (int)substr($partialNumber, 0, 3);

    return ($start >= 300 && $start <= 305)
    || in_array((int)substr($partialNumber, 0, 2), [36, 38, 39, 54, 55]);
  }

  public function getLengths()
  {
    return [14, 16];
  }

  public function getTestNumbers()
  {
    return [
      '30569309025904',
      '38520000023237',
    ];
  }
}
