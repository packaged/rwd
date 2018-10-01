<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Panjabi / Punjabi';
  }

  public function getNativeName()
  {
    return 'ਪੰਜਾਬੀ / पंजाबी / <span dir=\"rtl\">پنجابي</span>';
  }

  public function getCode()
  {
    return 'pa';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
