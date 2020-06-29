<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TpiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tok Pisin';
  }

  public function getNativeName()
  {
    return 'Tok Pisin';
  }

  public function getCode()
  {
    return 'tpi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
