<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class AfLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Afrikaans';
  }

  public function getNativeName()
  {
    return 'Afrikaans';
  }

  public function getCode()
  {
    return 'af';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
