<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class AstLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Asturian';
  }

  public function getNativeName()
  {
    return 'Asturianu';
  }

  public function getCode()
  {
    return 'ast';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
