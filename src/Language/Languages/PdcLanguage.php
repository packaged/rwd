<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class PdcLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Pennsylvania German';
  }

  public function getNativeName()
  {
    return 'Deitsch';
  }

  public function getCode()
  {
    return 'pdc';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
