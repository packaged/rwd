<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kongo';
  }

  public function getNativeName()
  {
    return 'KiKongo';
  }

  public function getCode()
  {
    return 'kg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
