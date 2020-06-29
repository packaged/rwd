<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class IdLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Indonesian';
  }

  public function getNativeName()
  {
    return 'Bahasa Indonesia';
  }

  public function getCode()
  {
    return 'id';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
