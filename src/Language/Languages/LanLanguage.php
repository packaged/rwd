<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LanLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Lango';
  }

  public function getNativeName()
  {
    return 'Leb Lango&nbsp;/ Luo';
  }

  public function getCode()
  {
    return 'lan';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
