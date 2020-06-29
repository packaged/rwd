<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class JvLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Javanese';
  }

  public function getNativeName()
  {
    return 'Basa Jawa';
  }

  public function getCode()
  {
    return 'jv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
