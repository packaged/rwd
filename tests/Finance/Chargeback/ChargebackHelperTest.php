<?php

namespace Finance\Chargeback;

use Packaged\Rwd\Finance\Chargeback\ChargebackReasonHelper;
use Packaged\Rwd\Finance\Chargeback\Reasons\DiscoverCardChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\MasterCardChargebackReason;
use Packaged\Rwd\Finance\Chargeback\Reasons\VisaChargebackReason;
use PHPUnit\Framework\TestCase;

class ChargebackHelperTest extends TestCase
{
  /** @dataProvider cardTypes */
  public function testIsValid(string $code, bool $expected)
  {
    $actual = ChargebackReasonHelper::isValid($code);

    static::assertEquals($expected, $actual);
  }

  public function cardTypes()
  {
    return [
      [VisaChargebackReason::RSN_10_1, true],
      [MasterCardChargebackReason::RSN_4807, true],
      [DiscoverCardChargebackReason::RSN_7030, true],
      ['XX', false],
    ];
  }

  public function testGetKeyedValues()
  {
    $vals = ChargebackReasonHelper::getKeyedValues();

    static::assertGreaterThan(200, count($vals));
    static::assertArrayHasKey(VisaChargebackReason::RSN_10_1, $vals);
    static::assertArrayHasKey(DiscoverCardChargebackReason::RSN_7030, $vals);
    static::assertEquals(
      '10.1: Fraud: EMV Liability Shift Counterfeit Fraud (Visa)',
      $vals[VisaChargebackReason::RSN_10_1]
    );
  }
}
