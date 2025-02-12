<?php

namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class PulseChargebackReason extends ChargebackReason
{
  const RSN_4537 = '4537';
  const RSN_4752 = '4752';
  const RSN_4866 = '4866';
  const RSN_4867 = '4867';
  const RSN_4868 = '4868';
  const RSN_4512 = '4512';
  const RSN_4590 = '4590';
  const RSN_4532 = '4532';
  const RSN_4542 = '4542';
  const RSN_4550 = '4550';
  const RSN_4586 = '4586';
  const RSN_4541 = '4541';
  const RSN_4553 = '4553';
  const RSN_4555 = '4555';
  const RSN_4560 = '4560';
  const RSN_4865 = '4865';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      // Fraud
      case self::RSN_4537:
        $reason->description = 'Card Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4752:
        $reason->description = 'Transaction Not Recognized';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4866:
        $reason->description = 'Chip Card Counterfeit transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4867:
        $reason->description = 'Lost/Stolen Chip Card Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4868:
        $reason->description = 'Card Not Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;

      // Authorization
      case self::RSN_4512:
        $reason->description = 'Invalid Cardholder Number';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_4590:
        $reason->description = 'Non-Receipt of Cash from ATM';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;

      // Processing errors
      case self::RSN_4532:
        $reason->description = 'Duplicate Processing';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4542:
        $reason->description = 'Late Presentation';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4550:
        $reason->description = 'Credit/Debit Posted Incorrectly';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4586:
        $reason->description = 'Altered Amount';
        $reason->category = ChargebackCategory::PROCESSING;
        break;

      // Consumer disputes
      case self::RSN_4541:
        $reason->description = 'Canceled Recurring Transaction';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4553:
        $reason->description = 'Cardholder Disputes Quality of Goods or Services';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4555:
        $reason->description = 'Non-Receipt of Goods or Services';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4560:
        $reason->description = 'Credit ot Processed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4865:
        $reason->description = 'Paid by Other Means';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
    }
    return $reason;
  }
}
