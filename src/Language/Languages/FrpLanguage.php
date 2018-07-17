<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FrpLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Arpitan&nbsp;/ Franco-Provençal';
  }

  public function getNativeName()
  {
    return 'Arpitan&nbsp;/ francoprovençal';
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
