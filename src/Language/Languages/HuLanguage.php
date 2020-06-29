<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class HuLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Hungarian';
  }

  public function getNativeName()
  {
    return 'Magyar';
  }

  public function getCode()
  {
    return 'hu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
