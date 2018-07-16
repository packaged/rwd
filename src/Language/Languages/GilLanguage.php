<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class GilLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Gilbertese';
  }

  public function getNativeName()
  {
    return 'Taetae ni kiribati';
  }

  public function getCode()
  {
    return 'gil';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
