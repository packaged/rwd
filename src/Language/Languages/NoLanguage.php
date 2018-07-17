<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Norwegian';
  }

  public function getNativeName()
  {
    return 'Norsk (bokmål&nbsp;/ riksmål)';
  }

  public function getCode()
  {
    return 'no';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
