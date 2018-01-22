<?php
namespace Packaged\Tests\Rwd\Language;

use Packaged\Rwd\Language\LanguageCode;
use Packaged\Rwd\Language\LanguageHelper;

class LanguageTest extends \PHPUnit_Framework_TestCase
{
  public function testValidLanguages()
  {
    $languageHelper = new LanguageHelper();

    // test successes
    $testTrue = [
      LanguageCode::LANG_EN,
      LanguageCode::LANG_DE,
      LanguageCode::LANG_FR,
      LanguageCode::LANG_IT,
      LanguageCode::LANG_ES,
      LanguageCode::LANG_PT,
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
