<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Breton';
  }

  public function getNativeName()
  {
    return 'Brezhoneg';
  }

  public function getCode()
  {
    return 'br';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
