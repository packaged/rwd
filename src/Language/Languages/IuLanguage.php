<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class IuLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Inuktitut';
  }

  public function getNativeName()
  {
    return 'ᐃᓄᒃᑎᑐᑦ';
  }

  public function getCode()
  {
    return 'iu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
