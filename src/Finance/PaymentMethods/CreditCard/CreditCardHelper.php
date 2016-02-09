<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\AmericanExpress;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\DinersClub;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Discover;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Encrypted;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\JCB;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\MasterCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Visa;

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

    $bin = (int)substr($number, 0, 6);

    //Avoid Detailed checks for invalid cards
    if(strlen($number) < 13 || self::getType($number) == null)
    {
      return null;
    }
    else if(preg_match('/^5[1-5][0-9]{14}$/', $number)
      || ((strlen($number) == 16) && ($bin >= 222100) && ($bin <= 272099))
    )
    {
      return new MasterCard($number);
    }
    else if(preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/', $number))
    {
      return new Visa($number);
    }
    else if(preg_match('/^3[47][0-9]{13}$/', $number))
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
    return null;
  }

  public static function getEncrypted($encryptedData, $last4, $bin = null)
  {
    return new Encrypted($encryptedData, $last4, $bin);
  }

  public static function getType($partialNumber)
  {
    if(empty($partialNumber))
    {
      return null;
    }
    switch($partialNumber[0])
    {
      case 4:
        return CreditCardType::VISA;
      case 5:
        return CreditCardType::MASTER_CARD;
      case 6:
        return CreditCardType::DISCOVER;
      case 3:
        switch($partialNumber[1])
        {
          case 4:
          case 7:
            return CreditCardType::AMEX;
          case 5:
            return CreditCardType::JCB;
          case 8:
          case 9:
          case 6:
          case 0:
            return CreditCardType::DINERS_CLUB;
          default:
            return null;
        }
      case 2:
        if(($partialNumber[1] >= 2) && ($partialNumber[1] <= 7))
        {
          return CreditCardType::MASTER_CARD;
        }
        else
        {
          return null;
        }
      default:
        return null;
    }
  }
}
