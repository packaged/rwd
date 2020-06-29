<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class IloLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Ilokano';
  }

  public function getNativeName()
  {
    return 'Ilokano';
  }

  public function getCode()
  {
    return 'ilo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
