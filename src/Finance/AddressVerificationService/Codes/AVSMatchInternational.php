<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

class AVSMatchInternational extends AVSMatch
{
  public function isInternational()
  {
    return true;
  }
}
