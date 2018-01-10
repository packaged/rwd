<?php
namespace Packaged\Rwd\Finance\Chargeback;

class ChargebackReason implements ChargebackReasonInterface
{
  protected $code;
  protected $description;
  protected $category;

  /**
   * @param        $code
   * @param string $descripton
   * @param string $category
   *
   * @return ChargebackReason
   */
  public static function create($code, $descripton = '', $category = ChargebackCategory::OTHER)
  {
    $reason = new self();
    $reason->code = $code;
    $reason->description = $descripton;
    $reason->category = $category;
    return $reason;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getCategory()
  {
    return $this->category;
  }
}
