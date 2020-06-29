<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class GotLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Gothic';
  }

  public function getNativeName()
  {
    return 'gutisk';
  }

  public function getCode()
  {
    return 'got';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
