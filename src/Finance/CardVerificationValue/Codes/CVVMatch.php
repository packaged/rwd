<?php
namespace Packaged\Rwd\Finance\CardVerificationValue\Codes;

use Packaged\Rwd\Finance\CardVerificationValue\CVVResponse;

class CVVMatch extends CVVResponse
{
  public function isMatch()
  {
    return true;
  }

  public function wasProcessed()
  {
    return true;
  }
}
