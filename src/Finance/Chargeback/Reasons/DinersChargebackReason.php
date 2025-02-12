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
  const RSN_A02 = 'A02';
  const RSN_A06 = 'A06';
  const RSN_B24 = 'B24';
  const RSN_B25 = 'B25';
  const RSN_B26 = 'B26';
  const RSN_B27 = 'B27';
  const RSN_D61 = 'D61';
  const RSN_D67 = 'D67';
  const RSN_D62 = 'D62';
  const RSN_D66 = 'D66';
  const RSN_D69 = 'D69';
  const RSN_D70 = 'D70';

  public static function create($code, $description = '', $category = ChargebackCategory::OTHER)
  {
    $reason = parent::create($code, $description, $category);
    switch($code)
    {
      // Fraud
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

      // Authorization
      case self::RSN_A02:
        $reason->description = 'Authorization Processing Errors';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;
      case self::RSN_A06:
        $reason->description = 'Unissued Account Number';
        $reason->category = ChargebackCategory::AUTHORIZATION;
        break;

      // Processing errors
      case self::RSN_B24:
        $reason->description = 'Late Presentation';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_B25:
        $reason->description = 'Duplicate Charge';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_B26:
        $reason->description = 'Alternate Settlement Currency Incorrect Exchange Rates';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_B27:
        $reason->description = 'Incorrect Currency';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_D61:
        $reason->description = 'Altered Amount';
        $reason->category = ChargebackCategory::PROCESSING;
        break;
      case self::RSN_D67:
        $reason->description = 'Cardmember Paid by Other Means';
        $reason->category = ChargebackCategory::PROCESSING;
        break;

      // Consumer disputes
      case self::RSN_D62:
        $reason->description = 'Non-Receipt of Goods or Services';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_D66:
        $reason->description = 'Credit not Processed';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_D69:
        $reason->description = 'Canceled Recurring Transactions';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
      case self::RSN_D70:
        $reason->description = 'Card member Does Not Recognize';
        $reason->category = ChargebackCategory::CONSUMER;
        break;
    }
    return $reason;
  }
}
