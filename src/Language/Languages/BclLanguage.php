<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BclLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Bikol';
  }

  public function getNativeName()
  {
    return 'Bikol Central';
  }

  public function getCode()
  {
    return 'bcl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
