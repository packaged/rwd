<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class EoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Esperanto';
  }

  public function getNativeName()
  {
    return 'Esperanto';
  }

  public function getCode()
  {
    return 'eo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
