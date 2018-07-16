<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BhLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Bihari';
  }

  public function getNativeName()
  {
    return 'भोजपुरी';
  }

  public function getCode()
  {
    return 'bh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
