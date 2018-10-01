<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class IiLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Sichuan Yi';
  }

  public function getNativeName()
  {
    return 'ꆇꉙ / 四川彝语';
  }

  public function getCode()
  {
    return 'ii';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
