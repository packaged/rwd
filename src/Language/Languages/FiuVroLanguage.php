<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FiuVroLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Võro';
  }

  public function getNativeName()
  {
    return 'Võro';
  }

  public function getCode()
  {
    return 'fiu-vro';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
