<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class WarLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Waray / Samar-Leyte Visayan';
  }

  public function getNativeName()
  {
    return 'Winaray / Binisaya Lineyte-Samarnon';
  }

  public function getCode()
  {
    return 'war';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
