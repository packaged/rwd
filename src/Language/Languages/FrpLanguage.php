<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class FrpLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Arpitan / Franco-Provençal';
  }

  public function getNativeName()
  {
    return 'Arpitan / francoprovençal';
  }

  public function getCode()
  {
    return 'frp';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
