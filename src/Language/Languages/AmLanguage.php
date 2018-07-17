<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AmLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Amharic';
  }

  public function getNativeName()
  {
    return 'አማርኛ';
  }

  public function getCode()
  {
    return 'am';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
