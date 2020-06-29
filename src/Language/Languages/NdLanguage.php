<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NdLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'North Ndebele';
  }

  public function getNativeName()
  {
    return 'Sindebele';
  }

  public function getCode()
  {
    return 'nd';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
