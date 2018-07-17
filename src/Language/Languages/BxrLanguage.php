<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BxrLanguage implements LanguageInterface
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
