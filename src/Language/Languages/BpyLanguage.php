<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BpyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Bishnupriya Manipuri';
  }

  public function getNativeName()
  {
    return 'ইমার ঠার/বিষ্ণুপ্রিয়া মণিপুরী';
  }

  public function getCode()
  {
    return 'bpy';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
