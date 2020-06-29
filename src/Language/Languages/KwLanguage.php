<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KwLanguage extends AbstractLanguage
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
