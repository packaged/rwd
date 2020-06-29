<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Bashkir';
  }

  public function getNativeName()
  {
    return 'Башҡорт';
  }

  public function getCode()
  {
    return 'ba';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
