<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ExtLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Extremaduran';
  }

  public function getNativeName()
  {
    return 'Estremeñu';
  }

  public function getCode()
  {
    return 'ext';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
