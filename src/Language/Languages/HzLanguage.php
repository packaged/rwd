<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class HzLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Herero';
  }

  public function getNativeName()
  {
    return 'Otsiherero';
  }

  public function getCode()
  {
    return 'hz';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
