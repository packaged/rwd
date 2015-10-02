<?php
namespace Packaged\Tests\Rwd\Finance\PaymentMethods\CreditCard\Cards;

use Packaged\Rwd\Finance\PaymentMethods\CreditCard\Cards\DinersClub;
use Packaged\Rwd\Finance\PaymentMethods\CreditCard\CreditCardType;

class DinersClubTest extends CreditCardTest
{
  protected function makeCard($number)
  {
    return new DinersClub($number);
  }

  protected function expectType()
  {
    return CreditCardType::DINERS_CLUB;
  }

  public function cardNumberProvider()
  {
    return [
      //Diners Club - Carte Blanche:
      ['30182854916616', true],
      ['30397195816479', true],
      ['30240303413112', true],
      //Diners Club - North America:
      //  - Avoid checking type, as expects master card
      ['5532496352802793', true, false],
      ['5506668599230283', true, false],
      ['5405756205688747', true, false],
      //Diners Club - International:
      ['36564827707830', true],
      ['36650561575481', true],
      ['36525393775246', true],
      //Invalid Numbers
      ['345rergerg74', false],
      ['41111112121211121', false],
      ['09876543212345624356', false],
    ];
  }

}
