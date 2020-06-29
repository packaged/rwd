<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class MwlLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Mirandese';
  }

  public function getNativeName()
  {
    return 'Mirandés';
  }

  public function getCode()
  {
    return 'mwl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
