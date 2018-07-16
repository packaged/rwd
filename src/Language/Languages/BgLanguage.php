<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Bulgarian';
  }

  public function getNativeName()
  {
    return 'Български';
  }

  public function getCode()
  {
    return 'bg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
