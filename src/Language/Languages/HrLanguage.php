<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Croatian';
  }

  public function getNativeName()
  {
    return 'Hrvatski';
  }

  public function getCode()
  {
    return 'hr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
