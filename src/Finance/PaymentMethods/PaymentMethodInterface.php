<?php
namespace Fortifi\Rwd\Finance\PaymentMethods;

interface PaymentMethodInterface
{
  /**
   * Type for this payment method e.g. creditcard
   *
   * @return string
   */
  public function getPaymentType();

  /**
   * Sub Type for this payment method e.g. visa
   *
   * @return string
   */
  public function getPaymentSubType();
}
