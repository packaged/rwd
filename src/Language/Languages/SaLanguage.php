<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Sanskrit';
  }

  public function getNativeName()
  {
    return 'संस्कृतम्';
  }

  public function getCode()
  {
    return 'sa';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
