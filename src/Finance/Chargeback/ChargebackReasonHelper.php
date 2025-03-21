<?php
namespace Packaged\Rwd\Finance\Chargeback;

use Packaged\Rwd\Finance\Chargeback\Reasons\AmericanExpressChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\DinersChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\DiscoverCardChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\MasterCardChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\NyceChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\PulseChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\StarChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\VisaChargebackReason;
use ReflectionClass;

class ChargebackReasonHelper
{
  const UNKNOWN_REASON = 'Unknown Reason';

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

      case DiscoverCardChargebackReason::RSN_16;
      case DiscoverCardChargebackReason::RSN_3041;
      case DiscoverCardChargebackReason::RSN_4534;
      case DiscoverCardChargebackReason::RSN_4541;
      case DiscoverCardChargebackReason::RSN_4553;
      case DiscoverCardChargebackReason::RSN_4555;
      case DiscoverCardChargebackReason::RSN_4752;
      case DiscoverCardChargebackReason::RSN_4755;
      case DiscoverCardChargebackReason::RSN_4866;
      case DiscoverCardChargebackReason::RSN_5;
      case DiscoverCardChargebackReason::RSN_5621;
      case DiscoverCardChargebackReason::RSN_6005;
      case DiscoverCardChargebackReason::RSN_6021;
      case DiscoverCardChargebackReason::RSN_6040;
      case DiscoverCardChargebackReason::RSN_6041;
      case DiscoverCardChargebackReason::RSN_7;
      case DiscoverCardChargebackReason::RSN_7010;
      case DiscoverCardChargebackReason::RSN_7030;
      case DiscoverCardChargebackReason::RSN_8002;
      case DiscoverCardChargebackReason::RSN_AA;
      case DiscoverCardChargebackReason::RSN_AL;
      case DiscoverCardChargebackReason::RSN_AP;
      case DiscoverCardChargebackReason::RSN_AT;
      case DiscoverCardChargebackReason::RSN_AW;
      case DiscoverCardChargebackReason::RSN_C08;
      case DiscoverCardChargebackReason::RSN_CA;
      case DiscoverCardChargebackReason::RSN_CD;
      case DiscoverCardChargebackReason::RSN_CR;
      case DiscoverCardChargebackReason::RSN_DA;
      case DiscoverCardChargebackReason::RSN_DC;
      case DiscoverCardChargebackReason::RSN_DP;
      case DiscoverCardChargebackReason::RSN_DP1;
      case DiscoverCardChargebackReason::RSN_EX;
      case DiscoverCardChargebackReason::RSN_IC;
      case DiscoverCardChargebackReason::RSN_IN;
      case DiscoverCardChargebackReason::RSN_IS;
      case DiscoverCardChargebackReason::RSN_LP;
      case DiscoverCardChargebackReason::RSN_N;
      case DiscoverCardChargebackReason::RSN_NA;
      case DiscoverCardChargebackReason::RSN_NC;
      case DiscoverCardChargebackReason::RSN_NF;
      case DiscoverCardChargebackReason::RSN_P;
      case DiscoverCardChargebackReason::RSN_PM;
      case DiscoverCardChargebackReason::RSN_RG;
      case DiscoverCardChargebackReason::RSN_RM;
      case DiscoverCardChargebackReason::RSN_RN;
      case DiscoverCardChargebackReason::RSN_RN2;
      case DiscoverCardChargebackReason::RSN_SV;
      case DiscoverCardChargebackReason::RSN_TF;
      case DiscoverCardChargebackReason::RSN_TNM;
      case DiscoverCardChargebackReason::RSN_UA01;
      case DiscoverCardChargebackReason::RSN_UA02;
      case DiscoverCardChargebackReason::RSN_UA03;
      case DiscoverCardChargebackReason::RSN_UA05;
      case DiscoverCardChargebackReason::RSN_UA06;
      case DiscoverCardChargebackReason::RSN_UA10;
      case DiscoverCardChargebackReason::RSN_UA11;
      case DiscoverCardChargebackReason::RSN_UA12;
      case DiscoverCardChargebackReason::RSN_UA20;
      case DiscoverCardChargebackReason::RSN_UA21;
      case DiscoverCardChargebackReason::RSN_UA22;
      case DiscoverCardChargebackReason::RSN_UA23;
      case DiscoverCardChargebackReason::RSN_UA28;
      case DiscoverCardChargebackReason::RSN_UA30;
      case DiscoverCardChargebackReason::RSN_UA31;
      case DiscoverCardChargebackReason::RSN_UA32;
      case DiscoverCardChargebackReason::RSN_UA38;
      case DiscoverCardChargebackReason::RSN_UA99;
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

      case AmericanExpressChargebackReason::RSN_4507:
      case AmericanExpressChargebackReason::RSN_4512:
      case AmericanExpressChargebackReason::RSN_4513:
      case AmericanExpressChargebackReason::RSN_4515:
      case AmericanExpressChargebackReason::RSN_4516:
      case AmericanExpressChargebackReason::RSN_4517:
      case AmericanExpressChargebackReason::RSN_4521:
      case AmericanExpressChargebackReason::RSN_4523:
      case AmericanExpressChargebackReason::RSN_4527:
      case AmericanExpressChargebackReason::RSN_4530:
      case AmericanExpressChargebackReason::RSN_4534:
      case AmericanExpressChargebackReason::RSN_4536:
      case AmericanExpressChargebackReason::RSN_4540:
      case AmericanExpressChargebackReason::RSN_4544:
      case AmericanExpressChargebackReason::RSN_4553:
      case AmericanExpressChargebackReason::RSN_4554:
      case AmericanExpressChargebackReason::RSN_4750:
      case AmericanExpressChargebackReason::RSN_4752:
      case AmericanExpressChargebackReason::RSN_4754:
      case AmericanExpressChargebackReason::RSN_4755:
      case AmericanExpressChargebackReason::RSN_4763:
      case AmericanExpressChargebackReason::RSN_4798:
        return AmericanExpressChargebackReason::create($value);

      case NyceChargebackReason::RSN_CC;
      case NyceChargebackReason::RSN_UF;
      case NyceChargebackReason::RSN_A2;
      case NyceChargebackReason::RSN_CF;
      case NyceChargebackReason::RSN_A5;
      case NyceChargebackReason::RSN_A6;
      case NyceChargebackReason::RSN_A1;
      case NyceChargebackReason::RSN_A3;
      case NyceChargebackReason::RSN_A4;
      case NyceChargebackReason::RSN_A7;
        return NyceChargebackReason::create($value);

      case PulseChargebackReason::RSN_4537;
      case PulseChargebackReason::RSN_4752;
      case PulseChargebackReason::RSN_4866;
      case PulseChargebackReason::RSN_4867;
      case PulseChargebackReason::RSN_4868;
      case PulseChargebackReason::RSN_4512;
      case PulseChargebackReason::RSN_4590;
      case PulseChargebackReason::RSN_4532;
      case PulseChargebackReason::RSN_4542;
      case PulseChargebackReason::RSN_4550;
      case PulseChargebackReason::RSN_4586;
      case PulseChargebackReason::RSN_4541;
      case PulseChargebackReason::RSN_4553;
      case PulseChargebackReason::RSN_4555;
      case PulseChargebackReason::RSN_4560;
      case PulseChargebackReason::RSN_4865;
        return PulseChargebackReason::create($value);

      case DinersChargebackReason::RSN_C41;
      case DinersChargebackReason::RSN_C42;
      case DinersChargebackReason::RSN_C46;
      case DinersChargebackReason::RSN_C53;
      case DinersChargebackReason::RSN_C54;
      case DinersChargebackReason::RSN_A02;
      case DinersChargebackReason::RSN_A06;
      case DinersChargebackReason::RSN_B24;
      case DinersChargebackReason::RSN_B25;
      case DinersChargebackReason::RSN_B26;
      case DinersChargebackReason::RSN_B27;
      case DinersChargebackReason::RSN_D61;
      case DinersChargebackReason::RSN_D67;
      case DinersChargebackReason::RSN_D62;
      case DinersChargebackReason::RSN_D66;
      case DinersChargebackReason::RSN_D69;
      case DinersChargebackReason::RSN_D70;
        return DinersChargebackReason::create($value);

      case StarChargebackReason::RSN_20:
      case StarChargebackReason::RSN_30:
      case StarChargebackReason::RSN_40:
      case StarChargebackReason::RSN_50:
      case StarChargebackReason::RSN_60:
      case StarChargebackReason::RSN_65:

      case StarChargebackReason::RSN_2000:
      case StarChargebackReason::RSN_3000:
      case StarChargebackReason::RSN_4000:
      case StarChargebackReason::RSN_5000:
      case StarChargebackReason::RSN_6000:
      case StarChargebackReason::RSN_6500:
        return StarChargebackReason::create($value);
    }

    return ChargebackReason::create($value, self::UNKNOWN_REASON);
  }

  public static function isValid($code): bool
  {
    $reason = self::fromCode($code);
    return $reason->getDescription() !== self::UNKNOWN_REASON;
  }

  public static function getKeyedValues(): array
  {
    $brands = [
      AmericanExpressChargebackReason::class,
      DinersChargebackReason::class,
      DiscoverCardChargebackReason::class,
      MasterCardChargebackReason::class,
      NyceChargebackReason::class,
      PulseChargebackReason::class,
      StarChargebackReason::class,
      VisaChargebackReason::class,
    ];

    $return = [];
    foreach($brands as $brand)
    {
      $reflection = new ReflectionClass($brand);

      $brandVals = array_values($reflection->getConstants());
      foreach($brandVals as $value)
      {
        $rsn = static::fromCode($value);
        $return[$value] = sprintf(
          "%s: %s: %s (%s)",
          $rsn->getCode(),
          ucwords($rsn->getCategory()),
          $rsn->getDescription(),
          substr($reflection->getShortName(), 0, -16), // Trim "ChargebackReason"
        );
      }
    }
    ksort($return, SORT_NATURAL);
    return $return;
  }
}
