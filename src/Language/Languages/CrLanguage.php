<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class CrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Cree';
  }

  public function getNativeName()
  {
    return 'Nehiyaw';
  }

  public function getCode()
  {
    return 'cr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
