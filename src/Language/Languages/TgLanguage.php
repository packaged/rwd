<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Tajik';
  }

  public function getNativeName()
  {
    return 'Тоҷикӣ';
  }

  public function getCode()
  {
    return 'tg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
