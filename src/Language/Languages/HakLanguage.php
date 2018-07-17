<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HakLanguage implements LanguageInterface
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
