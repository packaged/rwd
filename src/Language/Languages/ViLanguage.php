<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ViLanguage implements LanguageInterface
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
