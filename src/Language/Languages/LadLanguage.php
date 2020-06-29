<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LadLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Ladino / Judeo-Spanish';
  }

  public function getNativeName()
  {
    return 'Dzhudezmo / Djudeo-Espanyol';
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
