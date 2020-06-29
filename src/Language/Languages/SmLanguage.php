<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SmLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Samoan';
  }

  public function getNativeName()
  {
    return 'Gagana Samoa';
  }

  public function getCode()
  {
    return 'sm';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
