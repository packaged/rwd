<?php
namespace Packaged\Rwd\Finance\PaymentMethods\OnlineService;

use Packaged\Rwd\Finance\PaymentMethods\PaymentMethodType;

abstract class AbstractOnlineService implements OnlineServiceInterface
{
  public function getPaymentType()
  {
    return PaymentMethodType::ONLINE_SERVICE;
  }
}
