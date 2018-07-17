<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NdsNlLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Dutch Low Saxon';
  }

  public function getNativeName()
  {
    return 'Nedersaksisch';
  }

  public function getCode()
  {
    return 'nds-nl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
