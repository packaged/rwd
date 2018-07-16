<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Armenian';
  }

  public function getNativeName()
  {
    return 'Հայերեն';
  }

  public function getCode()
  {
    return 'hy';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
