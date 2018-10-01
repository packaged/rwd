<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class OjLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ojibwa';
  }

  public function getNativeName()
  {
    return 'ᐊᓂᔑᓈᐯᒧᐎᓐ / Anishinaabemowin';
  }

  public function getCode()
  {
    return 'oj';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
