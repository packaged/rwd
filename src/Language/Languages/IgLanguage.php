<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class IgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Igbo';
  }

  public function getNativeName()
  {
    return 'Igbo';
  }

  public function getCode()
  {
    return 'ig';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
