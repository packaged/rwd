<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class IaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Interlingua';
  }

  public function getNativeName()
  {
    return 'Interlingua';
  }

  public function getCode()
  {
    return 'ia';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
