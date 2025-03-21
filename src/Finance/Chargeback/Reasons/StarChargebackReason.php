<?php

namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class StarChargebackReason extends ChargebackReason
{
  const RSN_20 = '20';
  const RSN_30 = '30';
  const RSN_40 = '40';
  const RSN_50 = '50';
  const RSN_60 = '60';
  const RSN_65 = '65';

  const RSN_2000 = '2000';
  const RSN_3000 = '3000';
  const RSN_4000 = '4000';
  const RSN_5000 = '5000';
  const RSN_6000 = '6000';
  const RSN_6500 = '6500';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      case self::RSN_20:
        $reason->description = 'Authorization';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_30:
        $reason->description = 'Processing Error';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_40:
        $reason->description = 'Cardholder Dispute';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_50:
        $reason->description = 'Cancellations and Returns';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_60:
        $reason->description = 'Unauthorized/Fraud Dispute';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_65:
        $reason->description = 'Counterfeit Chip Card Fraud';
        $reason->category = ChargebackCategory::FRAUD;
        break;

      case self::RSN_2000:
        $reason->description = 'Authorization';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_3000:
        $reason->description = 'Processing Error';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4000:
        $reason->description = 'Cardholder Dispute';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_5000:
        $reason->description = 'Cancellation & Returns';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_6000:
        $reason->description = 'Unauthorized/Fraud Dispute';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_6500:
        $reason->description = 'Counterfeit Chip Card Fraud';
        $reason->category = ChargebackCategory::FRAUD;
        break;
    }
    return $reason;
  }
}
