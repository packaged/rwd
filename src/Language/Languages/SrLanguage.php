<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SrLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Serbian';
  }

  public function getNativeName()
  {
    return 'Српски';
  }

  public function getCode()
  {
    return 'sr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
