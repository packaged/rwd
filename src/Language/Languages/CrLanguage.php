<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CrLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Cree';
  }

  public function getNativeName()
  {
    return 'Nehiyaw';
  }

  public function getCode()
  {
    return 'cr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
