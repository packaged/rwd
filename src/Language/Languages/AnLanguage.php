<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class AnLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Aragonese';
  }

  public function getNativeName()
  {
    return 'Aragonés';
  }

  public function getCode()
  {
    return 'an';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
