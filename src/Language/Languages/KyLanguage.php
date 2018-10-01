<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kirghiz';
  }

  public function getNativeName()
  {
    return 'Kırgızca / Кыргызча';
  }

  public function getCode()
  {
    return 'ky';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
