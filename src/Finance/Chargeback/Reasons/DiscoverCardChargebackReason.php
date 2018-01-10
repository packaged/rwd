<?php
namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class DiscoverCardChargebackReason extends ChargebackReason
{
  const RSN_UA01 = 'UA01';
  const RSN_UA02 = 'UA02';
  const RSN_UA05 = 'UA05';
  const RSN_UA06 = 'UA06';
  const RSN_AT = 'AT';
  const RSN_IN = 'IN';
  const RSN_LP = 'LP';
  const RSN_5 = '5';
  const RSN_AA = 'AA';
  const RSN_AP = 'AP';
  const RSN_AW = 'AW';
  const RSN_CD = 'CD';
  const RSN_DP = 'DP';
  const RSN_NF = 'NF';
  const RSN_PM = 'PM';
  const RSN_RG = 'RG';
  const RSN_RM = 'RM';
  const RSN_RN2 = 'RN2';
  const RSN_DC = 'DC';

  public static function create($code, $descripton = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $descripton, $category);
    switch($code)
    {
      case self::RSN_UA01:
        $reason->description = 'Fraud – Card Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA02:
        $reason->description = 'Fraud – Card Not Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA05:
        $reason->description = 'Fraud – Chip Counterfeit Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA06:
        $reason->description = 'Fraud – Chip and PIN Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_AT:
        $reason->description = 'Authorization Noncompliance';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_IN:
        $reason->description = 'Invalid Card Number';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_LP:
        $reason->description = 'Late Presentation';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_5:
        $reason->description = 'Good Faith Investigation';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_AA:
        $reason->description = 'Does Not Recognize';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_AP:
        $reason->description = 'Recurring Payments';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_AW:
        $reason->description = 'Altered Amount';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_CD:
        $reason->description = 'Credit / Debit Posted Incorrectly';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_DP:
        $reason->description = 'Duplicate Processing';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_NF:
        $reason->description = 'Non - Receipt of Cash from ATM';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_PM:
        $reason->description = 'Paid by Other Means';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_RG:
        $reason->description = 'Non - Receipt of Goods, Services, or Cash';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_RM:
        $reason->description = 'Cardholder Disputes Quality of Goods or Services';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_RN2:
        $reason->description = 'Credit Not Processed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_DC:
        $reason->description = 'Dispute Compliance';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
    }
    return $reason;
  }
}
