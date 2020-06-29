<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Somalia';
  }

  public function getNativeName()
  {
    return 'Soomaaliga';
  }

  public function getCode()
  {
    return 'so';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
