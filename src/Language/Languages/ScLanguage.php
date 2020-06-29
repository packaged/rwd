<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ScLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Sardinian';
  }

  public function getNativeName()
  {
    return 'Sardu';
  }

  public function getCode()
  {
    return 'sc';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
