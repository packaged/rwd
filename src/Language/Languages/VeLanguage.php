<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class VeLanguage extends AbstractLanguage
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
