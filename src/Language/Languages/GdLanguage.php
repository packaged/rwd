<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class GdLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Scottish Gaelic';
  }

  public function getNativeName()
  {
    return 'Gàidhlig';
  }

  public function getCode()
  {
    return 'gd';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
