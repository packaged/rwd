<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NdsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Low German / Low Saxon';
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
