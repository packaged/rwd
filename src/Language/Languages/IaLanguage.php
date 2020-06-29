<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class IaLanguage extends AbstractLanguage
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
