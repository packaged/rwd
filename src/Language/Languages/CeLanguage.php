<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CeLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Chechen';
  }

  public function getNativeName()
  {
    return 'Нохчийн';
  }

  public function getCode()
  {
    return 'ce';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
