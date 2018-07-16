<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PiLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Pali';
  }

  public function getNativeName()
  {
    return 'Pāli&nbsp;/ पाऴि';
  }

  public function getCode()
  {
    return 'pi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
