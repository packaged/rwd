<?php
namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class MasterCardChargebackReason extends ChargebackReason
{
  const RSN_4837 = '4837';
  const RSN_4840 = '4840';
  const RSN_4849 = '4849';
  const RSN_4863 = '4863';
  const RSN_4870 = '4870';
  const RSN_4871 = '4871';
  const RSN_4807 = '4807';
  const RSN_4808 = '4808';
  const RSN_4812 = '4812';
  const RSN_4834 = '4834';
  const RSN_4831 = '4831';
  const RSN_4842 = '4842';
  const RSN_4846 = '4846';
  const RSN_4850 = '4850';
  const RSN_4999 = '4999';
  const RSN_4853 = '4853';
  const RSN_4841 = '4841';
  const RSN_4854 = '4854';
  const RSN_4855 = '4855';
  const RSN_4859 = '4859';
  const RSN_4860 = '4860';

  public static function create($code, $descripton = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $descripton, $category);
    switch($code)
    {
      case self::RSN_4837:
        $reason->description = 'No Cardholder Authorization';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4840:
        $reason->description = 'Fraudulent Processing of Transactions';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4849:
        $reason->description = 'Questionable Merchant Activity';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4863:
        $reason->description = 'Cardholder Does Not Recognize—Potential Fraud';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4870:
        $reason->description = 'Chip Liability Shift';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4871:
        $reason->description = 'Chip / PIN Liability Shift';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4807:
        $reason->description = 'Warning Bulletin File';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_4808:
        $reason->description = 'Authorization - Related Chargeback';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_4812:
        $reason->description = 'Account Number Not On File';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_4834:
        $reason->description = 'Point - of - Interaction Error';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4831:
        $reason->description = 'Transaction Amount Differs';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4842:
        $reason->description = 'Late Presentment';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4846:
        $reason->description = 'Correct Transaction Currency Code Not Provided';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4850:
        $reason->description = 'Installment Billing Dispute';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4999:
        $reason->description = 'Domestic Chargeback Dispute(Europe Region Only)';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4853:
        $reason->description = 'Cardholder Dispute';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4841:
        $reason->description = 'Canceled Recurring or Digital Goods Transactions';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4854:
        $reason->description = 'Cardholder Dispute—Not Elsewhere Classified(U.S. Region Only)';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4855:
        $reason->description = 'Goods or Services Not Provided';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4859:
        $reason->description = 'Addendum, No - show, or ATM Dispute';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4860:
        $reason->description = 'Credit Not Processed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
    }
    return $reason;
  }
}










