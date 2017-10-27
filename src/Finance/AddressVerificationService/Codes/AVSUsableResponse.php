<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

use Packaged\Rwd\Finance\AddressVerificationService\AVSResponse;

class AVSUsableResponse extends AVSResponse
{
  public function isAvailable()
  {
    return true;
  }

  public function isSupported()
  {
    return true;
  }
}
