<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class GanLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Gan Chinese';
  }

  public function getNativeName()
  {
    return '贛語';
  }

  public function getCode()
  {
    return 'gan';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
