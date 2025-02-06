<?php

namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class NyceChargebackReason extends ChargebackReason
{
  const RSN_CC = 'CC';
  const RSN_UF = 'UF';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      case self::RSN_CC:
        $reason->description = 'Chip Counterfeit';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UF:
        $reason->description = 'Unauthorized Fraud';
        $reason->category = ChargebackCategory::FRAUD;
        break;
    }
    return $reason;
  }
}
