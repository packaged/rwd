<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LanLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Lango';
  }

  public function getNativeName()
  {
    return 'Leb Lango / Luo';
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
