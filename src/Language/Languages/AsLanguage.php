<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class AsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Assamese';
  }

  public function getNativeName()
  {
    return 'অসমীয়া';
  }

  public function getCode()
  {
    return 'as';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
