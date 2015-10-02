<?php
namespace Fortifi\Rwd\Finance\PaymentMethods\CreditCard;

use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\Cards\AmericanExpress;
use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\Cards\DinersClub;
use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\Cards\Discover;
use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\Cards\JCB;
use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\Cards\MasterCard;
use Fortifi\Rwd\Finance\PaymentMethods\CreditCard\Cards\Visa;

class CreditCardHelper
{
  /**
   * @param $number
   *
   * @return null|CreditCardInterface
   */
  public static function getCard($number)
  {
    $number = preg_replace('/[^\d]/', '', $number);
    if(preg_match('/^3[47][0-9]{13}$/', $number))
    {
      return new AmericanExpress($number);
    }
    else if(preg_match('/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/', $number))
    {
      return new DinersClub($number);
    }
    else if(preg_match('/^6(?:011|5[0-9][0-9])[0-9]{12}$/', $number))
    {
      return new Discover($number);
    }
    else if(preg_match('/^(?:2131|1800|35\d{3})\d{11}$/', $number))
    {
      return new JCB($number);
    }
    else if(preg_match('/^5[1-5][0-9]{14}$/', $number))
    {
      return new MasterCard($number);
    }
    else if(preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/', $number))
    {
      return new Visa($number);
    }
    return null;
  }
}
