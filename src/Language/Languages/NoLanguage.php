<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Norwegian';
  }

  public function getNativeName()
  {
    return 'Norsk (bokmål / riksmål)';
  }

  public function getCode()
  {
    return 'no';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
