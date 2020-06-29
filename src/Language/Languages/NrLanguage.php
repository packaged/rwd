<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NrLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'South Ndebele';
  }

  public function getNativeName()
  {
    return 'isiNdebele';
  }

  public function getCode()
  {
    return 'nr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
