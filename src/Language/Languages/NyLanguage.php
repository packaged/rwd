<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NyLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Chichewa';
  }

  public function getNativeName()
  {
    return 'Chi-Chewa';
  }

  public function getCode()
  {
    return 'ny';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
