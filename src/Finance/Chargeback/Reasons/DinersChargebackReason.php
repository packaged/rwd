<?php

namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class DinersChargebackReason extends ChargebackReason
{
  const RSN_C41 = 'C41';
  const RSN_C42 = 'C42';
  const RSN_C46 = 'C46';
  const RSN_C53 = 'C53';
  const RSN_C54 = 'C54';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      case self::RSN_C41:
        $reason->description = 'Card Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_C42:
        $reason->description = 'Card Not Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_C46:
        $reason->description = 'Multiple Charges at Service Establishment Fraudulent Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_C53:
        $reason->description = 'Chip Card Counterfeit Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_C54:
        $reason->description = 'Lost or Stolen Chip and PIN Card Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
    }
    return $reason;
  }
}