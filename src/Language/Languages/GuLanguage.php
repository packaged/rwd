<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class GuLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Gujarati';
  }

  public function getNativeName()
  {
    return 'ગુજરાતી';
  }

  public function getCode()
  {
    return 'gu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
