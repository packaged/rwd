<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BarLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Bavarian';
  }

  public function getNativeName()
  {
    return 'Boarisch';
  }

  public function getCode()
  {
    return 'bar';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
