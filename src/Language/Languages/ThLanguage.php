<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ThLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Thai';
  }

  public function getNativeName()
  {
    return 'ไทย / Phasa Thai';
  }

  public function getCode()
  {
    return 'th';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
