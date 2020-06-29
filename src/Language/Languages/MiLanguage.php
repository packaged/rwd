<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class MiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Maori';
  }

  public function getNativeName()
  {
    return 'Māori';
  }

  public function getCode()
  {
    return 'mi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
