<?php

namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class AccelChargebackReason extends ChargebackReason
{
  const RSN_41 = "41";

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      case self::RSN_41:
        $reason->description = "Correction Item";
        $reason->category = ChargebackCategory::OTHER;
        break;
    }
    return $reason;
  }
}
