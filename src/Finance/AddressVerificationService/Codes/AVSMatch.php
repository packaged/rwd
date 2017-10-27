<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

class AVSMatch extends AVSUsableResponse
{
  public function isMatch()
  {
    return true;
  }
}
