<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class VeLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Venda';
  }

  public function getNativeName()
  {
    return 'Tshivenḓa';
  }

  public function getCode()
  {
    return 've';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
