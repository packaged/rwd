<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class GnLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Guarani';
  }

  public function getNativeName()
  {
    return 'Avañe\'ẽ';
  }

  public function getCode()
  {
    return 'gn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
