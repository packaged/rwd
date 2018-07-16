<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KwLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Cornish';
  }

  public function getNativeName()
  {
    return 'Kernewek';
  }

  public function getCode()
  {
    return 'kw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
