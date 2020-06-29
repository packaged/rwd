<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class OrLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Oriya';
  }

  public function getNativeName()
  {
    return 'ଓଡ଼ିଆ';
  }

  public function getCode()
  {
    return 'or';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
