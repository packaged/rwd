<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class RmLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Raeto Romance';
  }

  public function getNativeName()
  {
    return 'Rumantsch';
  }

  public function getCode()
  {
    return 'rm';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
