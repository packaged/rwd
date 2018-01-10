<?php
namespace Packaged\Rwd\Finance\Chargeback;

interface ChargebackCategory
{
  const FRAUD = 'fraud';
  const AUTHORIZATION = 'authorization';
  const PROCESSING = 'processing';
  const CONSUMER = 'consumer';
  const OTHER = 'other';
}
