<?php
namespace Packaged\Rwd\Finance\CardVerificationValue;

use Packaged\Rwd\Finance\CardVerificationValue\Codes\CVVMatch;
use Packaged\Rwd\Finance\CardVerificationValue\Codes\CVVNoMatch;
use Packaged\Rwd\Finance\CardVerificationValue\Codes\CVVNotProcessed;

class CVVHelper
{
  public static function getCvv($code)
  {
    $code = trim(strtoupper($code));
    switch($code)
    {
      case 'M':
        return new CVVMatch($code, 'CVV2 Match');
      case 'N':
        return new CVVNoMatch($code, 'CVV2 No Match');
      case 'P':
      case 'B':
        return new CVVNotProcessed($code, 'Not Processed');
      case 'S':
      case 'A':
        return new CVVResponse(
          $code,
          'Issuer indicates that CVV2 data should be present on the card, '
          . 'but the merchant has indicated data is not present on the card'
        );
      case 'U':
        return new CVVResponse(
          $code,
          'Issuer does not participate in CVV2 service, or '
          . 'participates but has not provided Visa with encryption keys, or both'
        );
      case 'I':
        return new CVVNoMatch($code, 'CVV2 Was invalid or empty');
      case 'Z':
        return new CVVNotProcessed($code, 'Server Provider did not respond');
      case '':
        return new CVVNoMatch(
          $code,
          'Transaction failed because wrong CVV2 number was entered or no CVV2 number was entered'
        );
      default:
        return new CVVResponse($code, "Unsupported CVV2 Response");
    }
  }
}
