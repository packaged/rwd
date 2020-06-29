<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Bislama';
  }

  public function getNativeName()
  {
    return 'Bislama';
  }

  public function getCode()
  {
    return 'bi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
