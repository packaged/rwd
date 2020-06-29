<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tigrinya';
  }

  public function getNativeName()
  {
    return 'ትግርኛ';
  }

  public function getCode()
  {
    return 'ti';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
