<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class PtLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Portuguese';
  }

  public function getNativeName()
  {
    return 'Português';
  }

  public function getCode()
  {
    return 'pt';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
