<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class EuLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Basque';
  }

  public function getNativeName()
  {
    return 'Euskara';
  }

  public function getCode()
  {
    return 'eu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
