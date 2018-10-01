<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class WarLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Waray & Samar-Leyte Visayan';
  }

  public function getNativeName()
  {
    return 'Winaray&nbsp;/ Binisaya Lineyte-Samarnon';
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
