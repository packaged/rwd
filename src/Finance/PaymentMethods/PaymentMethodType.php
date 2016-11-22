<?php
namespace Packaged\Rwd\Finance\PaymentMethods;

interface PaymentMethodType
{
  const CREDIT_CARD = 'creditcard';
  const DEBIT_CARD = 'debitcard';
  const CHEQUE = 'cheque';
  const CASH = 'cash';
  const PREPAID_CARD = 'prepaidcard';
  const DIRECT_DEBIT = 'directdebit';
  const BACS = 'bacs';
  const STANDING_ORDER = 'standingorder';
  const CHAPS = 'chaps';
  const ONLINE_SERVICE = 'onlineservice';
  const TELEPHONE = 'telephone';
  const CREDIT_NOTE = 'creditnote';
  const VIRTUAL_CARD = 'virtualcard';
  const GIFT_CARD = 'giftcard';
}
