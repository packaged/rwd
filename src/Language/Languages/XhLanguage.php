<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class XhLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Xhosa';
  }

  public function getNativeName()
  {
    return 'isiXhosa';
  }

  public function getCode()
  {
    return 'xh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
