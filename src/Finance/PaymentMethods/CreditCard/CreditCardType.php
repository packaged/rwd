<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard;

class CreditCardType
{
  const VISA = 'visa';
  const MASTER_CARD = 'mastercard';
  const AMEX = 'amex';
  const JCB = 'jcb';
  const DISCOVER = 'discover';
  const DINERS_CLUB = 'diners';
  const ENCRYPTED = 'encrypted';
  const UNKNOWN = 'unknown';
  const LOCAL_CARD = 'local_card';
  const OUROCARD = 'ourocard';
  const ATM_CARD = 'atm_card';
  const MAESTRO_SWITCH = 'maestro_switch';
  const MAESTRO = 'maestro';
  const RUPAY = 'rupay';
  const EBT = 'ebt';
  const LASER = 'laser';
  const BANKCARD = 'bankcard';
  const UK_LOCAL_CREDIT_CARD = 'uk_local_credit_card';
  const CHINA_UNIONPAY = 'china_unionpay';
  const PRIVATE_LABEL = 'private_label';
  const LOCAL_ISSUER = 'local_issuer';
  const SOLO = 'solo';
  const FUEL_CARD = 'fuel_card';
  const ATM_LOCAL_CARD = 'atm_local_card';
  const COMPROCARD = 'comprocard';
  const SBERCARD = 'sbercard';
  const DINACARD = 'dinacard';

  public static function getValues()
  {
    $oClass = new \ReflectionClass(get_called_class());
    return array_values($oClass->getConstants());
  }

  public static function getKeyedValues()
  {
    $return = [];
    foreach(static::getValues() as $value)
    {
      $return[$value] = static::getDisplayValue($value);
    }
    return $return;
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }

  public static function getDisplayValue($value)
  {
    switch($value)
    {
      case self::VISA:
        return 'Visa';
      case self::MASTER_CARD:
        return 'Mastercard';
      case self::AMEX:
        return 'American Express';
      case self::JCB:
        return 'JCB';
      case self::DISCOVER:
        return 'Discover';
      case self::DINERS_CLUB:
        return 'Diners Club';
      case self::ENCRYPTED:
        return 'Encrypted';
      case self::UNKNOWN:
        return 'Unknown';
      case self::LOCAL_CARD:
        return 'Local Card';
      case self::OUROCARD:
        return 'Ourocard';
      case self::ATM_CARD:
        return 'ATM Card';
      case self::MAESTRO_SWITCH:
        return 'Maestro Switch';
      case self::MAESTRO:
        return 'Maestro';
      case self::RUPAY:
        return 'RuPay';
      case self::EBT:
        return 'EBT';
      case self::LASER:
        return 'Laser';
      case self::BANKCARD:
        return 'Bankcard';
      case self::UK_LOCAL_CREDIT_CARD:
        return 'UK Local Credit Card';
      case self::CHINA_UNIONPAY:
        return 'China UnionPay';
      case self::PRIVATE_LABEL:
        return 'Private Label';
      case self::LOCAL_ISSUER:
        return 'Local Issuer';
      case self::SOLO:
        return 'Solo';
      case self::FUEL_CARD:
        return 'Fuel Card';
      case self::ATM_LOCAL_CARD:
        return 'ATM local Card';
      case self::COMPROCARD:
        return 'COMPROCARD';
      case self::SBERCARD:
        return 'Sbercard';
      case self::DINACARD:
        return 'DinaCard';
      default:
        return $value;
    }
  }

}
