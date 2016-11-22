<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\AmericanExpress;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\DinersClub;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Discover;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Encrypted;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\JCB;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\MasterCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\UnknownCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\Visa;

class CreditCardHelper
{
  /**
   * @return AbstractCreditCard[]
   */
  public static function getCardTypes()
  {
    // NOTE: The order matters here as JCB cards need to be checked before Diner's Club
    return [
      new MasterCard(),
      new Visa(),
      new AmericanExpress(),
      new JCB(),
      new DinersClub(),
      new Discover(),
      new UnknownCard(),
    ];
  }

  /**
   * @param $number
   *
   * @return null|CreditCardInterface
   */
  public static function getCard($number)
  {
    $number = preg_replace('/[^\d]/', '', $number);

    foreach(static::getCardTypes() as $cardType)
    {
      $cardType->setCardNumber($number);
      if($cardType->isValid())
      {
        return $cardType;
      }
    }
    return null;
  }

  public static function getEncrypted(
    $encryptedData, $last4 = null, $bin = null
  )
  {
    return new Encrypted($encryptedData, $last4, $bin);
  }

  public static function getType($partialNumber)
  {
    if(empty($partialNumber))
    {
      return null;
    }

    foreach(static::getCardTypes() as $cardType)
    {
      if($cardType->partialNumberIsValid($partialNumber))
      {
        return $cardType->getType();
      }
    }
    return null;
  }
}
