<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class InhLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ingush';
  }

  public function getNativeName()
  {
    return 'ГӀалгӀай';
  }

  public function getCode()
  {
    return 'inh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
