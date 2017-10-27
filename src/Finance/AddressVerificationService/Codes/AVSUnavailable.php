<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

use Packaged\Rwd\Finance\AddressVerificationService\AVSResponse;

class AVSUnavailable extends AVSResponse
{
  public function isAvailable()
  {
    return false;
  }

  public function isSupported()
  {
    return true;
  }
}
