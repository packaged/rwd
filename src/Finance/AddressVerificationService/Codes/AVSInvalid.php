<?php
namespace Packaged\Rwd\Finance\AddressVerificationService\Codes;

class AVSInvalid extends AVSUsableResponse
{
  public function isValid()
  {
    return false;
  }
}
