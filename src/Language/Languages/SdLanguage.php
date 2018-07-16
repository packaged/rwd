<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SdLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Sindhi';
  }

  public function getNativeName()
  {
    return 'सिनधि';
  }

  public function getCode()
  {
    return 'sd';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
