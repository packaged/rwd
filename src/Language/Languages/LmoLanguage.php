<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LmoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Lombard';
  }

  public function getNativeName()
  {
    return 'Lumbaart';
  }

  public function getCode()
  {
    return 'lmo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
