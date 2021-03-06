<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class DeLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'German';
  }

  public function getNativeName()
  {
    return 'Deutsch';
  }

  public function getCode()
  {
    return 'de';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
