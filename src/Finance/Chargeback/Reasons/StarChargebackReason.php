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
    }
    return $reason;
  }
}
