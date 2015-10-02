<?php
namespace Fortifi\Rwd\Finance\PaymentMethods\OnlineService;

use Fortifi\Rwd\Finance\PaymentMethods\PaymentMethodType;

abstract class AbstractOnlineService implements OnlineServiceInterface
{
  public function getPaymentType()
  {
    return PaymentMethodType::ONLINE_SERVICE;
  }
}
