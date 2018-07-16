<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class IeLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Interlingue';
  }

  public function getNativeName()
  {
    return 'Interlingue';
  }

  public function getCode()
  {
    return 'ie';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
