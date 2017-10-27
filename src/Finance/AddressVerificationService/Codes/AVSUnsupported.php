<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

use Packaged\Rwd\Finance\AddressVerificationService\AVSResponse;

class AVSUnsupported extends AVSResponse
{
  public function isSupported()
  {
    return false;
  }
}
