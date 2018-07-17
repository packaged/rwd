<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NdsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Low German&nbsp;/ Low Saxon';
  }

  public function getNativeName()
  {
    return 'Plattdüütsch';
  }

  public function getCode()
  {
    return 'nds';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
