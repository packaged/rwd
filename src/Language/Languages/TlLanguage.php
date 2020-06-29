<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TlLanguage extends AbstractLanguage
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
