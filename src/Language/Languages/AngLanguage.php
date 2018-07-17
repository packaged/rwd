<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AngLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Anglo-Saxon&nbsp;/ Old English';
  }

  public function getNativeName()
  {
    return 'Englisc';
  }

  public function getCode()
  {
    return 'ang';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
