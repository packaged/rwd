<?php
namespace Packaged\Rwd\Finance\CardVerificationValue\Codes;

use Packaged\Rwd\Finance\CardVerificationValue\CVVResponse;

class CVVNoMatch extends CVVResponse
{
  public function isMatch()
  {
    return false;
  }

  public function wasProcessed()
  {
    return true;
  }
}
