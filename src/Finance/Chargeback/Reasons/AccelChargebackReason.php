<?php

namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class AccelChargebackReason extends ChargebackReason
{
  const RSN_7 = "7";
  const RSN_8 = "8";
  const RSN_12 = "12";
  const RSN_31 = "31";
  const RSN_34 = "34";
  const RSN_37 = "37";
  const RSN_41 = "41";
  const RSN_42 = "42";
  const RSN_46 = "46";
  const RSN_49 = "49";
  const RSN_50 = "50";
  const RSN_53 = "53";
  const RSN_54 = "54";
  const RSN_55 = "55";
  const RSN_59 = "59";
  const RSN_60 = "60";
  const RSN_70 = "70";
  const RSN_71 = "71";

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      case self::RSN_7:
        $reason->description = "Warning Bulletin File";
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_8:
        $reason->description = "Requested/Required Authorization Not Obtained";
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_12:
        $reason->description = "Account Number Not on File";
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_31:
        $reason->description = "Transaction Amount Differs";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_34:
        $reason->description = "Point of Interaction";
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_37:
        $reason->description = "No Cardholder Authorization";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_41:
        $reason->description = "Cancelled Recurring Transaction";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_42:
        $reason->description = "Late Presentment";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_46:
        $reason->description = "Correct Currency Code Not Provided";
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_49:
        $reason->description = "Questionable Client Activity";
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_50:
        $reason->description = "Credit Posted as a Purchase";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_53:
        $reason->description = "Not As Described";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_54:
        $reason->description = "Cardholder Dispute — Not Elsewhere Classified";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_55:
        $reason->description = "Goods or Services Not Provided";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_59:
        $reason->description = "No-Show, Addendum, or ATM Dispute";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_60:
        $reason->description = "Credit Not Processed";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_70:
        $reason->description = "Chip Liability Shift";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_71:
        $reason->description = "Chip/PIN Liability Shift";
        $reason->category = ChargebackCategory::CONSUMER;
        break;
    }
    return $reason;
  }
}