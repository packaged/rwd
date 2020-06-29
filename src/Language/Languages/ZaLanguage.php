<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ZaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Zhuang';
  }

  public function getNativeName()
  {
    return 'Cuengh / Tôô / 壮语';
  }

  public function getCode()
  {
    return 'za';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
