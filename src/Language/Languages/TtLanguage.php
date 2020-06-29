<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TtLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tatar';
  }

  public function getNativeName()
  {
    return 'Tatarça';
  }

  public function getCode()
  {
    return 'tt';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
