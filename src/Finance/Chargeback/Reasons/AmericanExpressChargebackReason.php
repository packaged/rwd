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

  // AUSTRALIAN MERCHANT CHARGEBACK REASON CODES
  const RSN_4507 = '4507';
  const RSN_4512 = '4512';
  const RSN_4513 = '4513';
  const RSN_4515 = '4515';
  const RSN_4516 = '4516';
  const RSN_4517 = '4517';
  const RSN_4521 = '4521';
  const RSN_4523 = '4523';
  const RSN_4527 = '4527';
  const RSN_4530 = '4530';
  const RSN_4534 = '4534';
  const RSN_4536 = '4536';
  const RSN_4540 = '4540';
  const RSN_4544 = '4544';
  const RSN_4553 = '4553';
  const RSN_4554 = '4554';
  const RSN_4750 = '4750';
  const RSN_4752 = '4752';
  const RSN_4754 = '4754';
  const RSN_4755 = '4755';
  const RSN_4763 = '4763';
  const RSN_4798 = '4798';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch ($code)
    {
      case self::RSN_UA01:
        $reason->description = 'Card Present Transaction';
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

      case self::RSN_4507:
        $reason->description = 'Incorrect Transaction Amount Or Primary Account Number (PAN) Presented';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4512:
        $reason->description = 'Multiple Processing';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4513:
        $reason->description = 'Credit Not Presented';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4515:
        $reason->description = 'Paid Through Other Means';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4516:
        $reason->description = 'Request For Support Not Fulfilled';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4517:
        $reason->description = 'Request For Support Illegible / Incomplete';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4521:
        $reason->description = 'Invalid Authorisation';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_4523:
        $reason->description = 'Unassigned Card Member Account Number';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4527:
        $reason->description = 'Missing Imprint';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4530:
        $reason->description = 'Currency Discrepancy';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4534:
        $reason->description = 'Multiple ROCs';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4536:
        $reason->description = 'Late Presentment';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4540:
        $reason->description = 'Card Not Present';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4544:
        $reason->description = 'Cancellation Of Recurring Goods / Services';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4553:
        $reason->description = 'Not As Described Or Defective Merchandise';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4554:
        $reason->description = 'Goods And Services Not Received';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4750:
        $reason->description = 'Car Rental Charge Non Qualified or Unsubstantiated';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4752:
        $reason->description = 'Credit / Debit Presentment Error';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4754:
        $reason->description = 'Local Regulatory / Legal Dispute';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4755:
        $reason->description = 'No Valid Authorisation';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_4763:
        $reason->description = 'Fraud Full Recourse';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4798:
        $reason->description = 'Fraud Liability Shift – Counterfeit';
        $reason->category = ChargebackCategory::FRAUD;
        break;
    }
    return $reason;
  }
}
