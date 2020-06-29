<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class OcLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Occitan';
  }

  public function getNativeName()
  {
    return 'Occitan';
  }

  public function getCode()
  {
    return 'oc';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
