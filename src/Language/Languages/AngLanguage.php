<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class AngLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Anglo-Saxon / Old English';
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
