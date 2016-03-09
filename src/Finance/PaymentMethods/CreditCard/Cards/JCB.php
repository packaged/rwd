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

  public function partialNumberIsValid($partialNumber)
  {
    $start = (int)substr($partialNumber, 0, 4);
    $longStart = (int)substr($partialNumber, 0, 8);
    return in_array($start, [3088, 3096, 3112, 3158, 3337])
    || (($longStart >= 35280000) && ($longStart <= 35899999));
  }

  public function getTestNumbers()
  {
    return [
      '3530111333300000',
      '3566002020360505',
      '3088000000000017',
    ];
  }
}
