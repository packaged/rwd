<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LnLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Lingala';
  }

  public function getNativeName()
  {
    return 'Lingála';
  }

  public function getCode()
  {
    return 'ln';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
