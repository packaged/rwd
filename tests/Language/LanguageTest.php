<?php
namespace Packaged\Tests\Rwd\Language;

use Packaged\Rwd\Language\LanguageCode;
use Packaged\Rwd\Language\LanguageHelper;
use Packaged\Rwd\Language\LanguageName;
use Packaged\Rwd\Language\LanguageNativeName;

class LanguageTest extends \PHPUnit_Framework_TestCase
{
  public function testKeyedValues()
  {
    $compare = [
      LanguageCode::EN => LanguageName::EN,
      LanguageCode::FR => LanguageName::FR,
      LanguageCode::ES => LanguageName::ES,
      LanguageCode::IT => LanguageName::IT,
      LanguageCode::DE => LanguageName::DE,
      LanguageCode::PT => LanguageName::PT,
    ];

    $this->assertEquals(true, $compare == LanguageHelper::getKeyValues());
  }

  public function testNativeKeyedValues()
  {
    $compare = [
      LanguageCode::EN => LanguageNativeName::EN,
      LanguageCode::FR => LanguageNativeName::FR,
      LanguageCode::ES => LanguageNativeName::ES,
      LanguageCode::IT => LanguageNativeName::IT,
      LanguageCode::DE => LanguageNativeName::DE,
      LanguageCode::PT => LanguageNativeName::PT,
    ];

    $this->assertEquals(true, $compare == LanguageHelper::getNativeKeyValues());
  }

  public function testLanguageName()
  {
    $languageHelper = new LanguageHelper();

    $this->assertEquals(LanguageName::EN, $languageHelper::getName(LanguageCode::EN));
    $this->assertEquals(LanguageName::PT, $languageHelper::getName(LanguageCode::PT));
    $this->assertEquals(LanguageName::ES, $languageHelper::getName(LanguageCode::ES));
    $this->assertEquals(LanguageName::DE, $languageHelper::getName(LanguageCode::DE));
    $this->assertEquals(LanguageName::FR, $languageHelper::getName(LanguageCode::FR));
    $this->assertEquals(LanguageName::IT, $languageHelper::getName(LanguageCode::IT));

    $this->assertEquals(null, $languageHelper::getName(null));
    $this->assertEquals(null, $languageHelper::getName(''));
    $this->assertEquals(null, $languageHelper::getName(' '));
  }

  public function testNativeLanguageName()
  {
    $languageHelper = new LanguageHelper();

    $this->assertEquals(LanguageNativeName::EN, $languageHelper::getNativeName(LanguageCode::EN));
    $this->assertEquals(LanguageNativeName::PT, $languageHelper::getNativeName(LanguageCode::PT));
    $this->assertEquals(LanguageNativeName::ES, $languageHelper::getNativeName(LanguageCode::ES));
    $this->assertEquals(LanguageNativeName::DE, $languageHelper::getNativeName(LanguageCode::DE));
    $this->assertEquals(LanguageNativeName::FR, $languageHelper::getNativeName(LanguageCode::FR));
    $this->assertEquals(LanguageNativeName::IT, $languageHelper::getNativeName(LanguageCode::IT));

    $this->assertEquals(null, $languageHelper::getNativeName(null));
    $this->assertEquals(null, $languageHelper::getNativeName(''));
    $this->assertEquals(null, $languageHelper::getNativeName(' '));
  }

  public function testValidLanguages()
  {
    $languageHelper = new LanguageHelper();

    // test successes
    $testTrue = [
      LanguageCode::EN,
      LanguageCode::DE,
      LanguageCode::FR,
      LanguageCode::IT,
      LanguageCode::ES,
      LanguageCode::PT,
      'PT',
      'De',
      'fR',
    ];

    foreach($testTrue as $item)
    {
      $this->assertEquals(true, $languageHelper::isValid($item));
    }

    // test fails
    $testFalse = [
      '',
      ' ',
      'test',
      null,
      1,
    ];

    foreach($testFalse as $item)
    {
      $this->assertEquals(false, $languageHelper::isValid($item));
    }
  }
}
