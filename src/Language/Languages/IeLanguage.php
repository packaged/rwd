<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class IeLanguage extends AbstractLanguage
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
