<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class HiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Hindi';
  }

  public function getNativeName()
  {
    return 'हिन्दी';
  }

  public function getCode()
  {
    return 'hi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
