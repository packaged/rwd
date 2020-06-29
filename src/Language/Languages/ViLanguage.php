<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ViLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Vietnamese';
  }

  public function getNativeName()
  {
    return 'Việtnam';
  }

  public function getCode()
  {
    return 'vi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
