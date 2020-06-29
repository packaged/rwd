<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ScoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Scots';
  }

  public function getNativeName()
  {
    return 'Scots';
  }

  public function getCode()
  {
    return 'sco';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
