<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ZaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Zhuang';
  }

  public function getNativeName()
  {
    return 'Cuengh&nbsp;/ Tôô&nbsp;/ 壮语';
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
