<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class DaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Danish';
  }

  public function getNativeName()
  {
    return 'Dansk';
  }

  public function getCode()
  {
    return 'da';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
