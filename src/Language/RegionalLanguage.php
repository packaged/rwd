<?php
namespace Packaged\Rwd\Language;

class RegionalLanguage extends AbstractRegionalLanguage implements RegionalLanguageInterface
{
  protected $_language;
  protected $_regionCode;

  public function __construct(LanguageInterface $baseLanguage, string $regionCode)
  {
    $this->_language = $baseLanguage;
    $this->_regionCode = $regionCode;
  }

  public function getEnglishName()
  {
    return $this->_language->getEnglishName();
  }

  public function getNativeName()
  {
    return $this->_language->getNativeName();
  }

  public function getCode()
  {
    return $this->_language->getCode();
  }

  public function getDirection()
  {
    return $this->_language->getDirection();
  }

  public function getRegionCode()
  {
    return $this->_regionCode;
  }
}
