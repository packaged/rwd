<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Bosnian';
  }

  public function getNativeName()
  {
    return 'Bosanski';
  }

  public function getCode()
  {
    return 'bs';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
