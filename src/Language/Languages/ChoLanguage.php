<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ChoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Choctaw';
  }

  public function getNativeName()
  {
    return 'Choctaw';
  }

  public function getCode()
  {
    return 'cho';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
