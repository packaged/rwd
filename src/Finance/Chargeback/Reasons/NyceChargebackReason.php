<?php

namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class NyceChargebackReason extends ChargebackReason
{
  const RSN_CC = 'CC';
  const RSN_UF = 'UF';
  const RSN_A2 = 'A2';
  const RSN_CF = 'CF';
  const RSN_A5 = 'A5';
  const RSN_A6 = 'A6';
  const RSN_A1 = 'A1';
  const RSN_A3 = 'A3';
  const RSN_A4 = 'A4';
  const RSN_A7 = 'A7';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      // Fraud
      case self::RSN_CC:
        $reason->description = 'Chip Counterfeit';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UF:
        $reason->description = 'Unauthorized Fraud';
        $reason->category = ChargebackCategory::FRAUD;
        break;

      // Authorization
      case self::RSN_A2:
        $reason->description = 'Account not available';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_CF:
        $reason->description = 'No AVS provided';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;

      // Processing
      case self::RSN_A5:
        $reason->description = 'Transaction Amount Differs';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_A6:
        $reason->description = 'Duplicate Transaction';
        $reason->category = ChargebackCategory::PROCESSING;
        break;

      // Consumer disputes
      case self::RSN_A1:
        $reason->description = 'Cardholder Dispute';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_A3:
        $reason->description = 'Merchandise not received';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_A4:
        $reason->description = 'Merchandise not described';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_A7:
        $reason->description = 'Credit not received';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
    }
    return $reason;
  }
}
