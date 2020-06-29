<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class PlLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Polish';
  }

  public function getNativeName()
  {
    return 'Polski';
  }

  public function getCode()
  {
    return 'pl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
