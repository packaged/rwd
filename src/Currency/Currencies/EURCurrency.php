<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Country\CountryCode;
use Packaged\Rwd\Currency\AbstractCurrency;

class EURCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '€';
  }

  public function getCode()
  {
    return 'EUR';
  }

  public function getNumericCode()
  {
    return '978';
  }

  public function getName()
  {
    return 'Euro';
  }

  public function getMajorUnit()
  {
    return 'euro';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 0.7586;
  }

  protected $_countryCode;

  public function setCountry(CountryCode $code)
  {
    $this->_countryCode = $code;
    return $this;
  }

  protected function _getRenderFormat($amount)
  {
    switch($this->_countryCode)
    {
      case CountryCode::CODE_AT;
      case CountryCode::CODE_FI;
      case CountryCode::CODE_FR;
      case CountryCode::CODE_DE;
      case CountryCode::CODE_PT;
      case CountryCode::CODE_ES;
        $return = $amount < 0 ? '-' : '';
        $return .= '{number} {symbol} {code}';
        return $return;
    }
    return parent::_getRenderFormat($amount);
  }

}
