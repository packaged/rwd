<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SmLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Samoan';
  }

  public function getNativeName()
  {
    return 'Gagana Samoa';
  }

  public function getCode()
  {
    return 'sm';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
