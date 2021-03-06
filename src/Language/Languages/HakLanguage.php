<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class HakLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Hakka Chinese';
  }

  public function getNativeName()
  {
    return '客家語/Hak-kâ-ngî';
  }

  public function getCode()
  {
    return 'hak';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
