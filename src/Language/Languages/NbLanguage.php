<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NbLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Norwegian Bokmål';
  }

  public function getNativeName()
  {
    return 'Norsk (bokmål)';
  }

  public function getCode()
  {
    return 'nb';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
