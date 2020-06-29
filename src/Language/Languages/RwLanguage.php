<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class RwLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Rwandi';
  }

  public function getNativeName()
  {
    return 'Kinyarwandi';
  }

  public function getCode()
  {
    return 'rw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
