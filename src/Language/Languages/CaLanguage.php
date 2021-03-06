<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Catalan';
  }

  public function getNativeName()
  {
    return 'Català';
  }

  public function getCode()
  {
    return 'ca';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
