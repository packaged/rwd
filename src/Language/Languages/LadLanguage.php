<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LadLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ladino & Judeo-Spanish';
  }

  public function getNativeName()
  {
    return 'Dzhudezmo&nbsp;/ Djudeo-Espanyol';
  }

  public function getCode()
  {
    return 'lad';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
