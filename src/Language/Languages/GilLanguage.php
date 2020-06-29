<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class GilLanguage extends AbstractLanguage
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
