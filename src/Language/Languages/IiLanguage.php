<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class IiLanguage extends AbstractLanguage
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
