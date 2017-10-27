<?php
namespace Packaged\Rwd\Finance\AddressVerificationService;

use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSInvalid;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSMatch;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSMatchInternational;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSNoMatch;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSNoMatchInternational;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSPartialMatch;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSPartialMatchInternational;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSUnavailable;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSUnsupported;
use Packaged\Rwd\Finance\AddressVerificationService\Codes\AVSUnsupportedInternational;

class AVSHelper
{
  public static function getAvs($code)
  {
    switch(strtoupper($code))
    {
      case 'X':
        return new AVSMatch($code, 'Street address and 9-digit ZIP code both match');
      case 'Y':
        return new AVSMatch($code, 'Street address and 5-digit ZIP code both match');
      case 'A':
        return new AVSPartialMatch(
          $code,
          'Street address matches, but both 5-digit and 9-digit ZIP Code do not match',
          true
        );
      case 'W':
        return new AVSPartialMatch($code, 'Street address does not match, but 9-digit ZIP code matches', false, true);
      case 'Z':
        return new AVSPartialMatch($code, 'Street address does not match, but 5-digit ZIP code matches', false, true);
      case 'N':
        return new AVSNoMatch($code, 'Street address, 5-digit ZIP code, and 9-digit ZIP code all do not match');
      case 'U':
        return new AVSUnavailable(
          $code,
          'Address information unavailable. Returned if non-US.\nAVS is not available or if the AVS in a U.S. bank is not functioning properly.'
        );
      case 'R':
        return new AVSUnavailable($code, 'Retry - Issuer\'s System Unavailable or Timed Out.');
      case 'E':
        return new AVSInvalid($code, 'AVS data is invalid');
      case 'S':
        return new AVSUnsupported($code, 'U.S. issuing bank does not support AVS');
      case 'D':
      case 'M':
      case 'F':
        return new AVSMatchInternational($code, 'Street Address and Postal Code match');
      case 'B':
        return new AVSPartialMatchInternational($code, 'Postal Code not verified due to incompatible formats', true);
      case 'P':
        return new AVSPartialMatchInternational(
          $code,
          'Postal Codes match but street address not verified due to incompatible formats', false, true
        );
      case 'C':
        return new AVSNoMatchInternational(
          $code,
          'Street Address and Postal Code not verified due to incompatible formats'
        );
      case 'I':
        return new AVSNoMatchInternational($code, 'Address Information not verified by issuer');
      case 'G':
        return new AVSUnsupportedInternational($code, 'Non-US. Issuer does not participate');
      default:
        return new AVSResponse($code, 'Unsupported AVS Code');
    }
  }
}
