<?php
namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class AmericanExpressChargebackReason extends ChargebackReason
{
  const RSN_UA01 = 'UA01';
  const RSN_F10 = 'F10';
  const RSN_F14 = 'F14';
  const RSN_F24 = 'F24';
  const RSN_F29 = 'F29';
  const RSN_F30 = 'F30';
  const RSN_F31 = 'F31';
  const RSN_A01 = 'A01';
  const RSN_A02 = 'A02';
  const RSN_A08 = 'A08';
  const RSN_P01 = 'P01';
  const RSN_P03 = 'P03';
  const RSN_P04 = 'P04';
  const RSN_P05 = 'P05';
  const RSN_P07 = 'P07';
  const RSN_P08 = 'P08';
  const RSN_P22 = 'P22';
  const RSN_P23 = 'P23';
  const RSN_C02 = 'C02';
  const RSN_C04 = 'C04';
  const RSN_C05 = 'C05';
  const RSN_C08 = 'C08';
  const RSN_C14 = 'C14';
  const RSN_C18 = 'C18';
  const RSN_C28 = 'C28';
  const RSN_C31 = 'C31';
  const RSN_C32 = 'C32';
  const RSN_M10 = 'M10';
  const RSN_M49 = 'M49';
  const RSN_M01 = 'M01';
  const RSN_R03 = 'R03';
  const RSN_R13 = 'R13';
  const RSN_FR2 = 'FR2';
  const RSN_FR4 = 'FR4';
  const RSN_FR6 = 'FR6';

  public static function create($code, $descripton = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $descripton, $category);
    switch($code)
    {
      case self::RSN_UA01:
        $reason->description = 'Fraud – Card Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_F10:
        $reason->description = 'Missing Imprint';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_F14:
        $reason->description = 'Missing Signature';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_F24:
        $reason->description = 'No Card Member Authorization';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_F29:
        $reason->description = 'Card Not Present';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_F30:
        $reason->description = 'EMV Counterfeit';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_F31:
        $reason->description = 'EMV Lost / Stolen / Non - Received';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_A01:
        $reason->description = 'Charge Amount Exceeds Authorization Amount';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_A02:
        $reason->description = 'No Valid Authorization';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_A08:
        $reason->description = 'Authorization Approval Expired';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_P01:
        $reason->description = 'Unassigned Card Number';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_P03:
        $reason->description = 'Credit Processed as Charge';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_P04:
        $reason->description = 'Charge Processed as Credit';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_P05:
        $reason->description = 'Incorrect Charge Amount';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_P07:
        $reason->description = 'Late Submission';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_P08:
        $reason->description = 'Duplicate Charge';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_P22:
        $reason->description = 'Non - Matching Card Number';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_P23:
        $reason->description = 'Currency Discrepancy';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_C02:
        $reason->description = 'Credit Not Processed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C04:
        $reason->description = 'Goods / Services Returned or Refused';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C05:
        $reason->description = 'Goods / Services Canceled';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C08:
        $reason->description = 'Goods / Services Not Received or Only Partially Received';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C14:
        $reason->description = 'Paid by Other Means';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C18:
        $reason->description = '“No Show” or CARDeposit Canceled';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C28:
        $reason->description = 'Canceled Recurring Billing';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C31:
        $reason->description = 'Goods / Services Not As Described';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_C32:
        $reason->description = 'Goods / Services Damaged or Defective';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_M10:
        $reason->description = 'Vehicle Rental – Capital Damages';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_M49:
        $reason->description = 'Vehicle Rental – Theft or Loss of Use';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_M01:
        $reason->description = 'Chargeback Authorization';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_R03:
        $reason->description = 'Insufficient Reply';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_R13:
        $reason->description = 'No Reply';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_FR2:
        $reason->description = 'Fraud Full Recourse Program';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_FR4:
        $reason->description = 'Immediate Chargeback Program';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_FR6:
        $reason->description = 'Partial Immediate Chargeback Program';
        $reason->category = ChargebackCategory::OTHER;
        break;
    }
  }
}
