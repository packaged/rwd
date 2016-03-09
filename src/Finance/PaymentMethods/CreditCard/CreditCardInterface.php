<?php
namespace Packaged\Rwd\Finance\PaymentMethods\CreditCard;

use Packaged\Rwd\Finance\PaymentMethods\PaymentMethodInterface;

interface CreditCardInterface extends PaymentMethodInterface
{
  /**
   * @return string
   */
  public function getCardNumber();

  /**
   * First 6 Digits from the card number
   *
   * @return string
   */
  public function getBin();

  /**
   * Last 4 Digits from the card number
   *
   * @return string
   */
  public function getLast4();

  /**
   * @param string $cardNumber
   *
   * @return AbstractCreditCard
   */
  public function setCardNumber($cardNumber);

  /**
   * @return string
   */
  public function getNameOnCard();

  /**
   * @param string $nameOnCard
   *
   * @return AbstractCreditCard
   */
  public function setNameOnCard($nameOnCard);

  /**
   * @return int
   */
  public function getExpiryMonth();

  /**
   * @param int $expiryMonth
   *
   * @return AbstractCreditCard
   */
  public function setExpiryMonth($expiryMonth);

  /**
   * @return int
   */
  public function getExpiryYear();

  /**
   * @param int $expiryYear
   *
   * @return AbstractCreditCard
   */
  public function setExpiryYear($expiryYear);

  /**
   * @return int
   */
  public function getStartMonth();

  /**
   * @param int $startMonth
   *
   * @return AbstractCreditCard
   */
  public function setStartMonth($startMonth);

  /**
   * @return int
   */
  public function getStartYear();

  /**
   * @param int $startYear
   *
   * @return AbstractCreditCard
   */
  public function setStartYear($startYear);

  /**
   * @return int
   */
  public function getIssue();

  /**
   * @param int $issue
   *
   * @return AbstractCreditCard
   */
  public function setIssue($issue);

  /**
   * @return array
   */
  public function getLengths();

  /**
   * Is Credit Card Number Valid
   *
   * @return bool
   */
  public function isValid();

  /**
   * Is this partial number (without last 4 digits) valid for this card type?
   * Should also be able to check the full card number
   *
   * @param string $partialNumber
   *
   * @return bool
   */
  public function partialNumberIsValid($partialNumber);

  /**
   * Array of test card numbers
   *
   * @return array
   */
  public function getTestNumbers();

  /**
   * @return string
   */
  public function getType();

  /**
   * Return the name of the card type, e.g. American Express
   *
   * @return string
   */
  public function getTypeName();
}
