<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class JboLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Lojban';
  }

  public function getNativeName()
  {
    return 'Lojban';
  }

  public function getCode()
  {
    return 'jbo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
