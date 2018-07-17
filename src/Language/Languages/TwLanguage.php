<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TwLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Twi';
  }

  public function getNativeName()
  {
    return 'Twi';
  }

  public function getCode()
  {
    return 'tw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
