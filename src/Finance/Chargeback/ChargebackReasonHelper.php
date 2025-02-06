<?php
namespace Packaged\Rwd\Finance\Chargeback;

use Packaged\Rwd\Finance\Chargeback\Reasons\AmericanExpressChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\DiscoverCardChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\MasterCardChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\NyceChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\PulseChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\StarChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\VisaChargebackReason;

class ChargebackReasonHelper
{
  public static function fromCode($value)
  {
    switch($value)
    {
      case VisaChargebackReason::RSN_57:
      case VisaChargebackReason::RSN_62:
      case VisaChargebackReason::RSN_81:
      case VisaChargebackReason::RSN_83:
      case VisaChargebackReason::RSN_93:
      case VisaChargebackReason::RSN_70:
      case VisaChargebackReason::RSN_71:
      case VisaChargebackReason::RSN_72:
      case VisaChargebackReason::RSN_73:
      case VisaChargebackReason::RSN_78:
      case VisaChargebackReason::RSN_74:
      case VisaChargebackReason::RSN_76:
      case VisaChargebackReason::RSN_77:
      case VisaChargebackReason::RSN_80:
      case VisaChargebackReason::RSN_82:
      case VisaChargebackReason::RSN_86:
      case VisaChargebackReason::RSN_30:
      case VisaChargebackReason::RSN_41:
      case VisaChargebackReason::RSN_53:
      case VisaChargebackReason::RSN_75:
      case VisaChargebackReason::RSN_85:
      case VisaChargebackReason::RSN_90:
      case VisaChargebackReason::RSN_10_1:
      case VisaChargebackReason::RSN_10_2:
      case VisaChargebackReason::RSN_10_3:
      case VisaChargebackReason::RSN_10_4:
      case VisaChargebackReason::RSN_10_5:
      case VisaChargebackReason::RSN_11_1:
      case VisaChargebackReason::RSN_11_2:
      case VisaChargebackReason::RSN_11_3:
      case VisaChargebackReason::RSN_12_1:
      case VisaChargebackReason::RSN_12_2:
      case VisaChargebackReason::RSN_12_3:
      case VisaChargebackReason::RSN_12_4:
      case VisaChargebackReason::RSN_12_5:
      case VisaChargebackReason::RSN_12_6:
      case VisaChargebackReason::RSN_12_7:
      case VisaChargebackReason::RSN_13_1:
      case VisaChargebackReason::RSN_13_2:
      case VisaChargebackReason::RSN_13_3:
      case VisaChargebackReason::RSN_13_4:
      case VisaChargebackReason::RSN_13_5:
      case VisaChargebackReason::RSN_13_6:
      case VisaChargebackReason::RSN_13_7:
      case VisaChargebackReason::RSN_13_8:
      case VisaChargebackReason::RSN_13_9:
        return VisaChargebackReason::create($value);

      case MasterCardChargebackReason::RSN_4837:
      case MasterCardChargebackReason::RSN_4840:
      case MasterCardChargebackReason::RSN_4849:
      case MasterCardChargebackReason::RSN_4863:
      case MasterCardChargebackReason::RSN_4870:
      case MasterCardChargebackReason::RSN_4871:
      case MasterCardChargebackReason::RSN_4807:
      case MasterCardChargebackReason::RSN_4808:
      case MasterCardChargebackReason::RSN_4812:
      case MasterCardChargebackReason::RSN_4834:
      case MasterCardChargebackReason::RSN_4831:
      case MasterCardChargebackReason::RSN_4842:
      case MasterCardChargebackReason::RSN_4846:
      case MasterCardChargebackReason::RSN_4850:
      case MasterCardChargebackReason::RSN_4999:
      case MasterCardChargebackReason::RSN_4853:
      case MasterCardChargebackReason::RSN_4841:
      case MasterCardChargebackReason::RSN_4854:
      case MasterCardChargebackReason::RSN_4855:
      case MasterCardChargebackReason::RSN_4859:
      case MasterCardChargebackReason::RSN_4860:
        return MasterCardChargebackReason::create($value);

      case DiscoverCardChargebackReason::RSN_UA01:
      case DiscoverCardChargebackReason::RSN_UA02:
      case DiscoverCardChargebackReason::RSN_UA05:
      case DiscoverCardChargebackReason::RSN_UA06:
      case DiscoverCardChargebackReason::RSN_AT:
      case DiscoverCardChargebackReason::RSN_IN:
      case DiscoverCardChargebackReason::RSN_LP:
      case DiscoverCardChargebackReason::RSN_5:
      case DiscoverCardChargebackReason::RSN_AA:
      case DiscoverCardChargebackReason::RSN_AP:
      case DiscoverCardChargebackReason::RSN_AW:
      case DiscoverCardChargebackReason::RSN_CD:
      case DiscoverCardChargebackReason::RSN_DP:
      case DiscoverCardChargebackReason::RSN_NF:
      case DiscoverCardChargebackReason::RSN_PM:
      case DiscoverCardChargebackReason::RSN_RG:
      case DiscoverCardChargebackReason::RSN_RM:
      case DiscoverCardChargebackReason::RSN_RN2:
      case DiscoverCardChargebackReason::RSN_DC:
        return DiscoverCardChargebackReason::create($value);

      case AmericanExpressChargebackReason::RSN_UA01:
      case AmericanExpressChargebackReason::RSN_F10:
      case AmericanExpressChargebackReason::RSN_F14:
      case AmericanExpressChargebackReason::RSN_F24:
      case AmericanExpressChargebackReason::RSN_F29:
      case AmericanExpressChargebackReason::RSN_F30:
      case AmericanExpressChargebackReason::RSN_F31:
      case AmericanExpressChargebackReason::RSN_A01:
      case AmericanExpressChargebackReason::RSN_A02:
      case AmericanExpressChargebackReason::RSN_A08:
      case AmericanExpressChargebackReason::RSN_P01:
      case AmericanExpressChargebackReason::RSN_P03:
      case AmericanExpressChargebackReason::RSN_P04:
      case AmericanExpressChargebackReason::RSN_P05:
      case AmericanExpressChargebackReason::RSN_P07:
      case AmericanExpressChargebackReason::RSN_P08:
      case AmericanExpressChargebackReason::RSN_P22:
      case AmericanExpressChargebackReason::RSN_P23:
      case AmericanExpressChargebackReason::RSN_C02:
      case AmericanExpressChargebackReason::RSN_C04:
      case AmericanExpressChargebackReason::RSN_C05:
      case AmericanExpressChargebackReason::RSN_C08:
      case AmericanExpressChargebackReason::RSN_C14:
      case AmericanExpressChargebackReason::RSN_C18:
      case AmericanExpressChargebackReason::RSN_C28:
      case AmericanExpressChargebackReason::RSN_C31:
      case AmericanExpressChargebackReason::RSN_C32:
      case AmericanExpressChargebackReason::RSN_M10:
      case AmericanExpressChargebackReason::RSN_M49:
      case AmericanExpressChargebackReason::RSN_M01:
      case AmericanExpressChargebackReason::RSN_R03:
      case AmericanExpressChargebackReason::RSN_R13:
      case AmericanExpressChargebackReason::RSN_FR2:
      case AmericanExpressChargebackReason::RSN_FR4:
      case AmericanExpressChargebackReason::RSN_FR6:
        return AmericanExpressChargebackReason::create($value);

      case NyceChargebackReason::RSN_CC:
      case NyceChargebackReason::RSN_UF:
        return NyceChargebackReason::create($value);

      case PulseChargebackReason::RSN_4537:
      case PulseChargebackReason::RSN_4752:
      case PulseChargebackReason::RSN_4866:
      case PulseChargebackReason::RSN_4867:
      case PulseChargebackReason::RSN_4868:
        return PulseChargebackReason::create($value);

      case StarChargebackReason::RSN_20:
      case StarChargebackReason::RSN_30:
      case StarChargebackReason::RSN_40:
      case StarChargebackReason::RSN_50:
      case StarChargebackReason::RSN_60:
      case StarChargebackReason::RSN_65:
        return StarChargebackReason::create($value);
    }

    return ChargebackReason::create($value, 'Unknown Reason');
  }
}
