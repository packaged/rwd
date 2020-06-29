<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BxrLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Buriat (Russia)';
  }

  public function getNativeName()
  {
    return 'Буряад хэлэн';
  }

  public function getCode()
  {
    return 'bxr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
