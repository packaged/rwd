<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class AvLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Avar';
  }

  public function getNativeName()
  {
    return 'Авар';
  }

  public function getCode()
  {
    return 'av';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
