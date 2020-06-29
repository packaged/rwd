<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class FiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Finnish';
  }

  public function getNativeName()
  {
    return 'Suomi';
  }

  public function getCode()
  {
    return 'fi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
