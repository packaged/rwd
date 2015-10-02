<?php
namespace Fortifi\Rwd\Finance\PaymentMethods\CreditCard;

interface CreditCardType
{
  const VISA = 'visa';
  const MASTER_CARD = 'mastercard';
  const AMEX = 'amex';
  const JCB = 'jcb';
  const DISCOVER = 'discover';
  const DINERS_CLUB = 'diners';
}
