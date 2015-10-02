<?php
namespace Fortifi\Rwd\Finance\PaymentMethods\CreditCard;

use Fortifi\Rwd\Finance\PaymentMethods\PaymentMethodInterface;

interface CreditCardInterface extends PaymentMethodInterface
{
  /**
   * @return string
   */
  public function getCardNumber();

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
   * Array of test card numbers
   *
   * @return array
   */
  public function getTestNumbers();

  /**
   * @return string
   */
  public function getType();
}
