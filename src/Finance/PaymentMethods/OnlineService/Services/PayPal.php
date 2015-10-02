<?php
namespace Packaged\Rwd\Finance\PaymentMethods\OnlineService\Services;

use Packaged\Rwd\Finance\PaymentMethods\OnlineService\AbstractOnlineService;
use Packaged\Rwd\Finance\PaymentMethods\OnlineService\OnlineServiceType;

class PayPal extends AbstractOnlineService
{
  public function getPaymentSubType()
  {
    return OnlineServiceType::PAYPAL;
  }

}
