<?php
namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class VisaChargebackReason extends ChargebackReason
{
  const RSN_57 = '57';
  const RSN_62 = '62';
  const RSN_81 = '81';
  const RSN_83 = '83';
  const RSN_93 = '93';
  const RSN_70 = '70';
  const RSN_71 = '71';
  const RSN_72 = '72';
  const RSN_73 = '73';
  const RSN_78 = '78';
  const RSN_74 = '74';
  const RSN_76 = '76';
  const RSN_77 = '77';
  const RSN_80 = '80';
  const RSN_82 = '82';
  const RSN_86 = '86';
  const RSN_30 = '30';
  const RSN_41 = '41';
  const RSN_53 = '53';
  const RSN_75 = '75';
  const RSN_85 = '85';
  const RSN_90 = '90';

  public static function create($code, $descripton = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $descripton, $category);
    switch($code)
    {
      case self::RSN_57:
        $reason->description = 'Fraudulent Multiple Transactions';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_62:
        $reason->description = 'Counterfeit Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_81:
        $reason->description = 'Fraud – Card-Present Environment';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_83:
        $reason->description = 'Fraud – Card-Absent Environment';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_93:
        $reason->description = 'Visa Fraud Monitoring Program';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_70:
        $reason->description = 'Card Recovery Bulletin or Exception File';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_71:
        $reason->description = 'Declined Authorization';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_72:
        $reason->description = 'No Authorization';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_73:
        $reason->description = 'Expired Card';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_78:
        $reason->description = 'Service Code Violation';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_74:
        $reason->description = 'Late Presentment';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_76:
        $reason->description = 'Incorrect Currency or Transaction Code';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_77:
        $reason->description = 'Non-Matching Account Number';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_80:
        $reason->description = 'Incorrect Transaction Amount or Account Number';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_82:
        $reason->description = 'Duplicate Processing';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_86:
        $reason->description = 'Paid by Other Means';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_30:
        $reason->description = 'Services Not Provided or Merchandise Not Received';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_41:
        $reason->description = 'Cancelled Recurring Transaction';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_53:
        $reason->description = 'Not as Described or Defective Merchandise';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_75:
        $reason->description = 'Transaction Not Recognized';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_85:
        $reason->description = 'Credit Not Processed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_90:
        $reason->description = 'Non-Receipt of Cash or Load Transaction Value at ATM';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
    }
    return $reason;
  }
}
