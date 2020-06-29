<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class MusLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Creek / Muskogee';
  }

  public function getNativeName()
  {
    return 'Mvskoke';
  }

  public function getCode()
  {
    return 'mus';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
