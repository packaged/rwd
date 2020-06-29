<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CvLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Chuvash';
  }

  public function getNativeName()
  {
    return 'Чăваш';
  }

  public function getCode()
  {
    return 'cv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
