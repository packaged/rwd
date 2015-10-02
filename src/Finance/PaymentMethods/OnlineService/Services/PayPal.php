<?php
namespace Fortifi\Rwd\Finance\PaymentMethods\OnlineService\Services;

use Fortifi\Rwd\Finance\PaymentMethods\OnlineService\AbstractOnlineService;

class PayPal extends AbstractOnlineService
{
  public function getPaymentSubType()
  {
    return 'paypal';
  }

}
