<?php
namespace Packaged\Rwd\Finance\Chargeback;

interface ChargebackReasonInterface
{
  /**
   * @return string
   */
  public function getCode();

  /**
   * @return string
   */
  public function getDescription();

  /**
   * @return string
   */
  public function getCategory();
}
