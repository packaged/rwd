<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LtLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Lithuanian';
  }

  public function getNativeName()
  {
    return 'Lietuvių';
  }

  public function getCode()
  {
    return 'lt';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
