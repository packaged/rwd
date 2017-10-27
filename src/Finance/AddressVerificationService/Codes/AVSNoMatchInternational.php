<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

class AVSNoMatchInternational extends AVSNoMatch
{
  public function isInternational()
  {
    return true;
  }
}
