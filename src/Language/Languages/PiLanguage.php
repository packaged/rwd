<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class PiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Pali';
  }

  public function getNativeName()
  {
    return 'Pāli / पाऴि';
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
