<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class RmyLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Romani';
  }

  public function getNativeName()
  {
    return 'Romani / रोमानी';
  }

  public function getCode()
  {
    return 'rmy';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
