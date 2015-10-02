<?php
namespace Fortifi\Rwd\Finance\PaymentMethods\CreditCard;

use Fortifi\Rwd\Finance\PaymentMethods\PaymentMethodType;

abstract class AbstractCreditCard implements CreditCardInterface
{
  protected $_cardNumber;

  protected $_nameOnCard;

  protected $_expiryMonth;
  protected $_expiryYear;

  protected $_startMonth;
  protected $_startYear;

  protected $_issue;

  public function __construct($number = null)
  {
    $this->_cardNumber = $number;
  }

  public function getPaymentType()
  {
    return PaymentMethodType::CREDIT_CARD;
  }

  /**
   * @return string
   */
  public function getCardNumber()
  {
    return $this->_cardNumber;
  }

  /**
   * @param string $cardNumber
   *
   * @return AbstractCreditCard
   */
  public function setCardNumber($cardNumber)
  {
    $this->_cardNumber = $cardNumber;
    return $this;
  }

  /**
   * @return string
   */
  public function getNameOnCard()
  {
    return $this->_nameOnCard;
  }

  /**
   * @param string $nameOnCard
   *
   * @return AbstractCreditCard
   */
  public function setNameOnCard($nameOnCard)
  {
    $this->_nameOnCard = $nameOnCard;
    return $this;
  }

  /**
   * @return int
   */
  public function getExpiryMonth()
  {
    return $this->_expiryMonth;
  }

  /**
   * @param int $expiryMonth
   *
   * @return AbstractCreditCard
   */
  public function setExpiryMonth($expiryMonth)
  {
    $this->_expiryMonth = $expiryMonth;
    return $this;
  }

  /**
   * @return int
   */
  public function getExpiryYear()
  {
    return $this->_expiryYear;
  }

  /**
   * @param int $expiryYear
   *
   * @return AbstractCreditCard
   */
  public function setExpiryYear($expiryYear)
  {
    $this->_expiryYear = $expiryYear;
    return $this;
  }

  /**
   * @return int
   */
  public function getStartMonth()
  {
    return $this->_startMonth;
  }

  /**
   * @param int $startMonth
   *
   * @return AbstractCreditCard
   */
  public function setStartMonth($startMonth)
  {
    $this->_startMonth = $startMonth;
    return $this;
  }

  /**
   * @return int
   */
  public function getStartYear()
  {
    return $this->_startYear;
  }

  /**
   * @param int $startYear
   *
   * @return AbstractCreditCard
   */
  public function setStartYear($startYear)
  {
    $this->_startYear = $startYear;
    return $this;
  }

  /**
   * @return int
   */
  public function getIssue()
  {
    return $this->_issue;
  }

  /**
   * @param int $issue
   *
   * @return AbstractCreditCard
   */
  public function setIssue($issue)
  {
    $this->_issue = $issue;
    return $this;
  }

  /**
   * @return array
   */
  public function getLengths()
  {
    return [16];
  }

  public function getTestNumbers()
  {
    return [];
  }

  public function isValid()
  {
    $number = $this->_cardNumber;
    if(!in_array(strlen($number), $this->getLengths()))
    {
      //Does not match Valid Lengths
      return false;
    }

    //Luhn Check
    settype($number, 'string');
    $sumTable = [
      [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
      [0, 2, 4, 6, 8, 1, 3, 5, 7, 9]
    ];
    $sum = 0;
    $flip = 0;
    for($i = strlen($number) - 1; $i >= 0; $i--)
    {
      $sum += $sumTable[$flip++ & 0x1][$number[$i]];
    }
    return $sum % 10 === 0;
  }

  public function getPaymentSubType()
  {
    return $this->getType();
  }
}
