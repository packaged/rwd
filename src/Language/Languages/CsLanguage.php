<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Czech';
  }

  public function getNativeName()
  {
    return 'Česky';
  }

  public function getCode()
  {
    return 'cs';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
