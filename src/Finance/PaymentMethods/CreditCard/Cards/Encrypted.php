<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\AbstractCreditCard;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class Encrypted extends AbstractCreditCard
{
  protected $_bin;
  protected $_last4;
  protected $_encryptedNumber;

  public function __construct($encryptedNumber, $last4, $bin = null)
  {
    $this->_encryptedNumber = $encryptedNumber;
    $this->_last4 = $last4;
    $this->_bin = $bin;
  }

  public function getTypeName()
  {
    return 'Encrypted';
  }

  public function getType()
  {
    return CreditCardType::ENCRYPTED;
  }

  public function isValid()
  {
    return true;
  }

  public function partialNumberIsValid($partialNumber)
  {
    return true;
  }

  public function getLast4()
  {
    return $this->_last4;
  }

  public function getBin()
  {
    return $this->_bin;
  }

  public function getEncryptedNumber()
  {
    return $this->_encryptedNumber;
  }
}
