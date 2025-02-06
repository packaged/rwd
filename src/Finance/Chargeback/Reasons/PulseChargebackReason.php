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

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      case self::RSN_4537:
        $reason->description = 'Card Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4752:
        $reason->description = 'Transaction Not Recognized';
        $reason->category = ChargebackCategory::OTHER;
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
    }
    return $reason;
  }
}
