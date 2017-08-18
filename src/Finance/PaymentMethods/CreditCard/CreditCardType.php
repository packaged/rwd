<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard;

interface CreditCardType
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
}
