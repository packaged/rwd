<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

class AVSUnsupportedInternational extends AVSUnsupported
{
  public function isInternational()
  {
    return true;
  }
}
