<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BeXOldLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Belarusian (Taraškievica)';
  }

  public function getNativeName()
  {
    return 'Беларуская (тарашкевіца)';
  }

  public function getCode()
  {
    return 'be-x-old';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
