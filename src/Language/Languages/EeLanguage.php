<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class EeLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Ewe';
  }

  public function getNativeName()
  {
    return 'Ɛʋɛ';
  }

  public function getCode()
  {
    return 'ee';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
