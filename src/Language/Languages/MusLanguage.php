<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MusLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Creek&nbsp;/ Muskogee';
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
