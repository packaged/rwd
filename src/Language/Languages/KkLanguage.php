<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KkLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Kazakh';
  }

  public function getNativeName()
  {
    return 'Қазақша';
  }

  public function getCode()
  {
    return 'kk';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
