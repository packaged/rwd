<?php
namespace Packaged\Rwd\Finance\AddressVerificationService;

interface AVSInterface
{
  public function getCode();

  public function getDescription();

  public function isMatch();

  public function isPartial();

  public function isAvailable();

  public function isSupported();

  public function isInternational();
}
