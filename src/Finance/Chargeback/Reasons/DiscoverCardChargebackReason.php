<?php
namespace Packaged\Rwd\Finance\Chargeback\Reasons;

use Packaged\Rwd\Finance\Chargeback\ChargebackCategory;
use Packaged\Rwd\Finance\Chargeback\ChargebackReason;

class DiscoverCardChargebackReason extends ChargebackReason
{
  const RSN_5 = '5';
  const RSN_7 = '7';
  const RSN_16 = '16';
  const RSN_3041 = '3041';
  const RSN_4534 = '4534';
  const RSN_4541 = '4541';
  const RSN_4542 = '4542';
  const RSN_4550 = '4550';
  const RSN_4762 = '4762';
  const RSN_4863 = '4863';
  const RSN_4864 = '4864';
  const RSN_4867 = '4867';
  const RSN_4553 = '4553';
  const RSN_4555 = '4555';
  const RSN_4586 = '4586';
  const RSN_4752 = '4752';
  const RSN_4753 = '4753';
  const RSN_4755 = '4755';
  const RSN_4865 = '4865';
  const RSN_4866 = '4866';
  const RSN_5621 = '5621';
  const RSN_6005 = '6005';
  const RSN_6021 = '6021';
  const RSN_6040 = '6040';
  const RSN_6041 = '6041';
  const RSN_7010 = '7010';
  const RSN_7030 = '7030';
  const RSN_8002 = '8002';
  const RSN_AA = 'AA';
  const RSN_AL = 'AL';
  const RSN_AP = 'AP';
  const RSN_AT = 'AT';
  const RSN_AW = 'AW';
  const RSN_C08 = 'C08';
  const RSN_CA = 'CA';
  const RSN_CD = 'CD';
  const RSN_CR = 'CR';
  const RSN_DA = 'DA';
  const RSN_DC = 'DC';
  const RSN_DP = 'DP';
  const RSN_DP1 = 'DP1';
  const RSN_EX = 'EX';
  const RSN_IC = 'IC';
  const RSN_IN = 'IN';
  const RSN_IS = 'IS';
  const RSN_LP = 'LP';
  const RSN_N = 'N';
  const RSN_NA = 'NA';
  const RSN_NC = 'NC';
  const RSN_NF = 'NF';
  const RSN_P = 'P';
  const RSN_PM = 'PM';
  const RSN_RG = 'RG';
  const RSN_RM = 'RM';
  const RSN_RN = 'RN';
  const RSN_RN2 = 'RN2';
  const RSN_SV = 'SV';
  const RSN_TF = 'TF';
  const RSN_TNM = 'TNM';
  const RSN_UA01 = 'UA01';
  const RSN_UA02 = 'UA02';
  const RSN_UA03 = 'UA03';
  const RSN_UA05 = 'UA05';
  const RSN_UA06 = 'UA06';
  const RSN_UA10 = 'UA10';
  const RSN_UA11 = 'UA11';
  const RSN_UA12 = 'UA12';
  const RSN_UA20 = 'UA20';
  const RSN_UA21 = 'UA21';
  const RSN_UA22 = 'UA22';
  const RSN_UA23 = 'UA23';
  const RSN_UA28 = 'UA28';
  const RSN_UA30 = 'UA30';
  const RSN_UA31 = 'UA31';
  const RSN_UA32 = 'UA32';
  const RSN_UA38 = 'UA38';
  const RSN_UA99 = 'UA99';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      case self::RSN_5:
        $reason->description = 'Good Faith Investigation';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_7:
        $reason->description = 'Authorization declined, unknown reason';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_16:
        $reason->description = 'No receipt for goods';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_3041:
        $reason->description = 'Cardholder evidence of signature request';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4534:
        $reason->description = 'Duplicate charge';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_4541:
        $reason->description = 'Customer stopped recurring billing, continued to be billed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4553:
        $reason->description = 'Customer misinformed of the good or services’ quality';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4555:
        $reason->description = 'Customer disputing credit too small';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4752:
        $reason->description = 'Customer does not recognize the transaction';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4755:
        $reason->description = 'Cardholder not received goods or services';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_4866:
        $reason->description = 'Cardholder not authorized';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_5621:
        $reason->description = 'Merchant missing signed sales receipt';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_6005:
        $reason->description = 'Retrieval request. Fraud analysis';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_6021:
        $reason->description = 'Customer does not recognize transaction';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_6040:
        $reason->description = 'Fraud - no authorization';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_6041:
        $reason->description = 'Retrieval request. Fraud analysis';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_7010:
        $reason->description = 'Cardholder cannot recall';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_7030:
        $reason->description = 'Fraud - Unauthorized purchase.';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_8002:
        $reason->description = 'Failed to process';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_AA:
        $reason->description = 'Does Not Recognize';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_AL:
        $reason->description = 'Fraud - airline sale';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_AP:
        $reason->description = 'Recurring Payments';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_AT:
        $reason->description = 'Authorization Noncompliance';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_AW:
        $reason->description = 'Altered Amount';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_C08:
        $reason->description = 'Goods purchased never received';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_CA:
        $reason->description = 'Cash advance not completed';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_CD:
        $reason->description = 'Credit / Debit Posted Incorrectly';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_CR:
        $reason->description = 'Cardholder cancelled reservation with merchant';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_DA:
        $reason->description = 'Declined authorization from the cardholder';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_DC:
        $reason->description = 'Dispute Compliance';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_DP:
        $reason->description = 'Duplicate Processing';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_DP1:
        $reason->description = 'Duplicate Processing';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_EX:
        $reason->description = 'Card Expired';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_IC:
        $reason->description = 'Illegible or is missing a valid legible card';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_IN:
        $reason->description = 'Invalid Card Name';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_IS:
        $reason->description = 'Invalid Card Signature';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_LP:
        $reason->description = 'Late Presentation';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_N:
        $reason->description = 'No funds dispensed from ATM';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_NA:
        $reason->description = 'Missing authorization';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_NC:
        $reason->description = 'Non classifiable dispute';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_NF:
        $reason->description = 'Non - Receipt of Cash from ATM';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_P:
        $reason->description = 'Cardholder not present at location of cash advance';
        $reason->category = ChargebackCategory::FRAUD;
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
      case self::RSN_RN:
        $reason->description = 'Amount greater than agreed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_RN2:
        $reason->description = 'Credit Not Processed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_SV:
        $reason->description = 'Unauthorized gift card transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_TF:
        $reason->description = 'Noncompliance with network regulations';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_TNM:
        $reason->description = 'Unrecognized cash advance';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA01:
        $reason->description = 'Card Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA02:
        $reason->description = 'Card Not Present Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA03:
        $reason->description = 'Amount billed exceeded authorized amount';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_UA05:
        $reason->description = 'Chip Counterfeit Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA06:
        $reason->description = 'Chip and PIN Transaction';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA10:
        $reason->description = 'Fraud swiped transactions';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA11:
        $reason->description = 'Fraud swiped transactions - no signature';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA12:
        $reason->description = 'Fraud swiped transactions - wrong signature';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA20:
        $reason->description = 'Fraud keyed transactions';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA21:
        $reason->description = 'Keyed transactions - no signature';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA22:
        $reason->description = 'Keyed transactions - wrong signature';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA23:
        $reason->description = 'Illegible card imprint';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA28:
        $reason->description = 'Illegible documentation';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA30:
        $reason->description = 'No proof of delivery';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA31:
        $reason->description = 'No valid proof of delivery';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA32:
        $reason->description = 'Failed to complete AVS';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_UA38:
        $reason->description = 'Merchant provided illegible documentation';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_UA99:
        $reason->description = 'Not compliant and not classifiable';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4542:
        $reason->description = 'Late Presentation';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4586:
        $reason->description = 'Failed to complete AVS';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_4753:
        $reason->description = 'Merchant provided illegible documentation';
        $reason->category = ChargebackCategory::FRAUD;
        break;
      case self::RSN_4865:
        $reason->description = 'Not compliant and not classifiable';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4550:
        $reason->description = 'Not compliant and not classifiable';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4762:
        $reason->description = 'Not compliant and not classifiable';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4863:
        $reason->description = 'Not compliant and not classifiable';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4864:
        $reason->description = 'Not compliant and not classifiable';
        $reason->category = ChargebackCategory::OTHER;
        break;
      case self::RSN_4867:
        $reason->description = 'Not compliant and not classifiable';
        $reason->category = ChargebackCategory::OTHER;
        break;
    }
    return $reason;
  }
}
