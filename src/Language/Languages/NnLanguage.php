<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NnLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Norwegian Nynorsk';
  }

  public function getNativeName()
  {
    return 'Norsk (nynorsk)';
  }

  public function getCode()
  {
    return 'nn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
