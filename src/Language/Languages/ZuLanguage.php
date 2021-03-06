<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ZuLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Zulu';
  }

  public function getNativeName()
  {
    return 'isiZulu';
  }

  public function getCode()
  {
    return 'zu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
