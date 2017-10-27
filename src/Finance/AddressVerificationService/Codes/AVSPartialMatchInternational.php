<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

class AVSPartialMatchInternational extends AVSPartialMatch
{
  public function isInternational()
  {
    return true;
  }
}
