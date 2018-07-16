<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TlLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Tagalog';
  }

  public function getNativeName()
  {
    return 'Tagalog';
  }

  public function getCode()
  {
    return 'tl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
